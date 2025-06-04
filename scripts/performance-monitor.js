#!/usr/bin/env node

/**
 * Performance Monitoring Script
 * 
 * This script helps monitor and analyze the performance of the optimized home page.
 * It can be used to track improvements and identify areas for further optimization.
 */

const fs = require('fs');
const path = require('path');

/**
 * Performance metrics configuration
 */
const performanceConfig = {
    // Target metrics (in milliseconds)
    targets: {
        fcp: 1500,      // First Contentful Paint
        lcp: 2500,      // Largest Contentful Paint
        fid: 100,       // First Input Delay
        cls: 0.1,       // Cumulative Layout Shift
        ttfb: 600,      // Time to First Byte
        tti: 3000       // Time to Interactive
    },
    
    // URLs to test
    urls: [
        'http://localhost:8000',
        'http://localhost:8000/home'
    ],
    
    // Test configurations
    testConfig: {
        runs: 3,
        device: 'mobile',
        connection: '3G',
        location: 'us-east-1'
    }
};

/**
 * Analyze bundle sizes
 */
function analyzeBundleSizes() {
    console.log('📊 Analyzing Bundle Sizes');
    console.log('==========================');
    
    const assetsDir = 'public/assets';
    const sizes = {};
    
    // Analyze CSS files
    const cssDir = path.join(assetsDir, 'css');
    if (fs.existsSync(cssDir)) {
        const cssFiles = fs.readdirSync(cssDir).filter(file => file.endsWith('.css'));
        sizes.css = cssFiles.map(file => {
            const filePath = path.join(cssDir, file);
            const stats = fs.statSync(filePath);
            return {
                file,
                size: stats.size,
                sizeKB: Math.round(stats.size / 1024 * 100) / 100
            };
        });
    }
    
    // Analyze JS files
    const jsDir = path.join(assetsDir, 'js');
    if (fs.existsSync(jsDir)) {
        const jsFiles = fs.readdirSync(jsDir).filter(file => file.endsWith('.js'));
        sizes.js = jsFiles.map(file => {
            const filePath = path.join(jsDir, file);
            const stats = fs.statSync(filePath);
            return {
                file,
                size: stats.size,
                sizeKB: Math.round(stats.size / 1024 * 100) / 100
            };
        });
    }
    
    // Analyze image files
    const imagesDir = path.join(assetsDir, 'images');
    if (fs.existsSync(imagesDir)) {
        const imageFiles = fs.readdirSync(imagesDir).filter(file => 
            /\.(jpg|jpeg|png|gif|svg|webp|avif)$/i.test(file)
        );
        sizes.images = imageFiles.map(file => {
            const filePath = path.join(imagesDir, file);
            const stats = fs.statSync(filePath);
            return {
                file,
                size: stats.size,
                sizeKB: Math.round(stats.size / 1024 * 100) / 100
            };
        });
    }
    
    // Display results
    displayBundleAnalysis(sizes);
    
    return sizes;
}

/**
 * Display bundle analysis results
 */
function displayBundleAnalysis(sizes) {
    console.log('\n📁 CSS Files:');
    if (sizes.css) {
        sizes.css.forEach(file => {
            const status = file.sizeKB > 100 ? '⚠️' : '✅';
            console.log(`  ${status} ${file.file}: ${file.sizeKB} KB`);
        });
        const totalCSS = sizes.css.reduce((sum, file) => sum + file.sizeKB, 0);
        console.log(`  📊 Total CSS: ${Math.round(totalCSS * 100) / 100} KB`);
    }
    
    console.log('\n📁 JavaScript Files:');
    if (sizes.js) {
        sizes.js.forEach(file => {
            const status = file.sizeKB > 200 ? '⚠️' : '✅';
            console.log(`  ${status} ${file.file}: ${file.sizeKB} KB`);
        });
        const totalJS = sizes.js.reduce((sum, file) => sum + file.sizeKB, 0);
        console.log(`  📊 Total JS: ${Math.round(totalJS * 100) / 100} KB`);
    }
    
    console.log('\n📁 Image Files:');
    if (sizes.images) {
        const largeImages = sizes.images.filter(file => file.sizeKB > 500);
        if (largeImages.length > 0) {
            console.log('  ⚠️  Large images (>500KB):');
            largeImages.forEach(file => {
                console.log(`    - ${file.file}: ${file.sizeKB} KB`);
            });
        }
        
        const totalImages = sizes.images.reduce((sum, file) => sum + file.sizeKB, 0);
        console.log(`  📊 Total Images: ${Math.round(totalImages * 100) / 100} KB`);
        console.log(`  📊 Image Count: ${sizes.images.length}`);
    }
}

/**
 * Generate performance recommendations
 */
function generateRecommendations(sizes) {
    console.log('\n💡 Performance Recommendations');
    console.log('===============================');
    
    const recommendations = [];
    
    // CSS recommendations
    if (sizes.css) {
        const totalCSS = sizes.css.reduce((sum, file) => sum + file.sizeKB, 0);
        if (totalCSS > 300) {
            recommendations.push('Consider splitting CSS into critical and non-critical bundles');
        }
        
        const largeCSS = sizes.css.filter(file => file.sizeKB > 100);
        if (largeCSS.length > 0) {
            recommendations.push('Minify and compress large CSS files');
        }
    }
    
    // JS recommendations
    if (sizes.js) {
        const totalJS = sizes.js.reduce((sum, file) => sum + file.sizeKB, 0);
        if (totalJS > 500) {
            recommendations.push('Implement code splitting for JavaScript bundles');
        }
        
        const largeJS = sizes.js.filter(file => file.sizeKB > 200);
        if (largeJS.length > 0) {
            recommendations.push('Consider lazy loading non-critical JavaScript');
        }
    }
    
    // Image recommendations
    if (sizes.images) {
        const largeImages = sizes.images.filter(file => file.sizeKB > 500);
        if (largeImages.length > 0) {
            recommendations.push('Optimize large images with compression and modern formats');
        }
        
        const totalImages = sizes.images.reduce((sum, file) => sum + file.sizeKB, 0);
        if (totalImages > 2000) {
            recommendations.push('Implement more aggressive lazy loading for images');
        }
    }
    
    // Display recommendations
    if (recommendations.length > 0) {
        recommendations.forEach((rec, index) => {
            console.log(`${index + 1}. ${rec}`);
        });
    } else {
        console.log('✅ No immediate recommendations - performance looks good!');
    }
}

/**
 * Check lazy loading implementation
 */
function checkLazyLoading() {
    console.log('\n🔍 Checking Lazy Loading Implementation');
    console.log('=======================================');
    
    const homeFile = 'resources/views/Home.blade.php';
    
    if (!fs.existsSync(homeFile)) {
        console.log('❌ Home.blade.php not found');
        return;
    }
    
    const content = fs.readFileSync(homeFile, 'utf8');
    
    // Count lazy images
    const lazyImages = (content.match(/class="lazy"/g) || []).length;
    const eagerImages = (content.match(/loading="eager"/g) || []).length;
    const totalImages = (content.match(/<img/g) || []).length;
    
    console.log(`📊 Image Loading Analysis:`);
    console.log(`  - Total images: ${totalImages}`);
    console.log(`  - Lazy loaded: ${lazyImages}`);
    console.log(`  - Eager loaded: ${eagerImages}`);
    console.log(`  - Lazy loading ratio: ${Math.round((lazyImages / totalImages) * 100)}%`);
    
    // Check for missing alt attributes
    const imagesWithoutAlt = (content.match(/<img[^>]*(?!alt=)[^>]*>/g) || []).length;
    if (imagesWithoutAlt > 0) {
        console.log(`⚠️  ${imagesWithoutAlt} images missing alt attributes`);
    } else {
        console.log('✅ All images have alt attributes');
    }
    
    // Check for missing dimensions
    const imagesWithoutDimensions = content.match(/<img(?![^>]*width=)(?![^>]*height=)[^>]*>/g);
    if (imagesWithoutDimensions && imagesWithoutDimensions.length > 0) {
        console.log(`⚠️  ${imagesWithoutDimensions.length} images missing width/height attributes`);
    } else {
        console.log('✅ All images have dimensions specified');
    }
}

/**
 * Generate performance report
 */
function generateReport() {
    const timestamp = new Date().toISOString();
    const report = {
        timestamp,
        bundleSizes: analyzeBundleSizes(),
        recommendations: []
    };
    
    // Save report
    const reportPath = `performance-report-${Date.now()}.json`;
    fs.writeFileSync(reportPath, JSON.stringify(report, null, 2));
    
    console.log(`\n📄 Report saved to: ${reportPath}`);
    
    return report;
}

/**
 * Main execution
 */
function main() {
    console.log('🚀 Performance Monitor');
    console.log('======================');
    console.log('');
    
    // Analyze current state
    const sizes = analyzeBundleSizes();
    generateRecommendations(sizes);
    checkLazyLoading();
    
    console.log('\n🎯 Performance Targets');
    console.log('======================');
    Object.entries(performanceConfig.targets).forEach(([metric, target]) => {
        console.log(`  ${metric.toUpperCase()}: ${target}${metric === 'cls' ? '' : 'ms'}`);
    });
    
    console.log('\n📋 Next Steps');
    console.log('==============');
    console.log('1. Run Lighthouse audit on the optimized page');
    console.log('2. Test on different devices and connection speeds');
    console.log('3. Monitor Core Web Vitals in production');
    console.log('4. Set up continuous performance monitoring');
}

// Export functions for use in other scripts
module.exports = {
    analyzeBundleSizes,
    generateRecommendations,
    checkLazyLoading,
    generateReport,
    performanceConfig
};

// Run if called directly
if (require.main === module) {
    main();
}
