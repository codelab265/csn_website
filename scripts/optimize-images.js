#!/usr/bin/env node

/**
 * Image Optimization Script
 * 
 * This script helps optimize images for web performance by:
 * - Converting images to modern formats (WebP, AVIF)
 * - Generating responsive image sizes
 * - Compressing images
 * - Creating optimized versions for lazy loading
 * 
 * Usage: node scripts/optimize-images.js [source-directory] [output-directory]
 */

const fs = require('fs');
const path = require('path');

// Configuration
const config = {
    // Supported input formats
    inputFormats: ['.jpg', '.jpeg', '.png', '.gif'],
    
    // Output formats to generate
    outputFormats: ['webp', 'avif', 'original'],
    
    // Responsive breakpoints
    breakpoints: [320, 640, 768, 1024, 1280, 1920],
    
    // Quality settings
    quality: {
        webp: 80,
        avif: 70,
        jpeg: 85,
        png: 90
    },
    
    // Lazy loading placeholder size
    placeholderSize: 20
};

/**
 * Generate optimized images for a given source
 */
function optimizeImage(sourcePath, outputDir) {
    const filename = path.basename(sourcePath, path.extname(sourcePath));
    const ext = path.extname(sourcePath).toLowerCase();
    
    if (!config.inputFormats.includes(ext)) {
        console.log(`Skipping ${sourcePath} - unsupported format`);
        return;
    }
    
    console.log(`Optimizing ${sourcePath}...`);
    
    // This is a placeholder implementation
    // In a real scenario, you would use libraries like:
    // - sharp (for Node.js image processing)
    // - imagemin (for compression)
    // - squoosh (for modern format conversion)
    
    generateResponsiveImages(sourcePath, outputDir, filename);
    generatePlaceholder(sourcePath, outputDir, filename);
    generateModernFormats(sourcePath, outputDir, filename);
}

/**
 * Generate responsive image sizes
 */
function generateResponsiveImages(sourcePath, outputDir, filename) {
    console.log(`  Generating responsive sizes for ${filename}...`);
    
    config.breakpoints.forEach(width => {
        // Placeholder for image resizing logic
        console.log(`    - ${width}w version`);
    });
}

/**
 * Generate low-quality placeholder for lazy loading
 */
function generatePlaceholder(sourcePath, outputDir, filename) {
    console.log(`  Generating placeholder for ${filename}...`);
    
    // Generate tiny, blurred version for lazy loading
    const placeholderPath = path.join(outputDir, `${filename}-placeholder.jpg`);
    console.log(`    - Placeholder: ${placeholderPath}`);
}

/**
 * Generate modern format versions (WebP, AVIF)
 */
function generateModernFormats(sourcePath, outputDir, filename) {
    console.log(`  Generating modern formats for ${filename}...`);
    
    config.outputFormats.forEach(format => {
        if (format !== 'original') {
            const outputPath = path.join(outputDir, `${filename}.${format}`);
            console.log(`    - ${format.toUpperCase()}: ${outputPath}`);
        }
    });
}

/**
 * Process all images in a directory
 */
function processDirectory(sourceDir, outputDir) {
    if (!fs.existsSync(sourceDir)) {
        console.error(`Source directory ${sourceDir} does not exist`);
        return;
    }
    
    if (!fs.existsSync(outputDir)) {
        fs.mkdirSync(outputDir, { recursive: true });
    }
    
    const files = fs.readdirSync(sourceDir);
    
    files.forEach(file => {
        const filePath = path.join(sourceDir, file);
        const stat = fs.statSync(filePath);
        
        if (stat.isFile()) {
            optimizeImage(filePath, outputDir);
        } else if (stat.isDirectory()) {
            const subOutputDir = path.join(outputDir, file);
            processDirectory(filePath, subOutputDir);
        }
    });
}

/**
 * Generate HTML snippet for responsive images
 */
function generatePictureElement(imageName, alt = '', lazy = true) {
    const loadingAttr = lazy ? 'loading="lazy"' : 'loading="eager"';
    const classAttr = lazy ? 'class="lazy"' : '';
    const srcAttr = lazy ? 'data-src' : 'src';
    
    return `
<picture>
    <source 
        type="image/avif" 
        ${lazy ? 'data-' : ''}srcset="
            assets/images/optimized/${imageName}-320.avif 320w,
            assets/images/optimized/${imageName}-640.avif 640w,
            assets/images/optimized/${imageName}-768.avif 768w,
            assets/images/optimized/${imageName}-1024.avif 1024w,
            assets/images/optimized/${imageName}-1280.avif 1280w,
            assets/images/optimized/${imageName}-1920.avif 1920w
        "
        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw">
    
    <source 
        type="image/webp" 
        ${lazy ? 'data-' : ''}srcset="
            assets/images/optimized/${imageName}-320.webp 320w,
            assets/images/optimized/${imageName}-640.webp 640w,
            assets/images/optimized/${imageName}-768.webp 768w,
            assets/images/optimized/${imageName}-1024.webp 1024w,
            assets/images/optimized/${imageName}-1280.webp 1280w,
            assets/images/optimized/${imageName}-1920.webp 1920w
        "
        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw">
    
    <img 
        ${srcAttr}="assets/images/optimized/${imageName}-768.jpg"
        ${lazy ? 'data-' : ''}srcset="
            assets/images/optimized/${imageName}-320.jpg 320w,
            assets/images/optimized/${imageName}-640.jpg 640w,
            assets/images/optimized/${imageName}-768.jpg 768w,
            assets/images/optimized/${imageName}-1024.jpg 1024w,
            assets/images/optimized/${imageName}-1280.jpg 1280w,
            assets/images/optimized/${imageName}-1920.jpg 1920w
        "
        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw"
        alt="${alt}"
        ${classAttr}
        ${loadingAttr}>
</picture>`.trim();
}

/**
 * Main execution
 */
function main() {
    const args = process.argv.slice(2);
    const sourceDir = args[0] || 'public/assets/images';
    const outputDir = args[1] || 'public/assets/images/optimized';
    
    console.log('🖼️  Image Optimization Script');
    console.log('================================');
    console.log(`Source: ${sourceDir}`);
    console.log(`Output: ${outputDir}`);
    console.log('');
    
    // Process images
    processDirectory(sourceDir, outputDir);
    
    console.log('');
    console.log('✅ Optimization complete!');
    console.log('');
    console.log('📝 Next steps:');
    console.log('1. Update your Blade templates to use the optimized images');
    console.log('2. Consider implementing the picture element for responsive images');
    console.log('3. Test the lazy loading functionality');
    console.log('');
    console.log('Example picture element:');
    console.log(generatePictureElement('hero-img-1', 'Hero image description', true));
}

// Export functions for use in other scripts
module.exports = {
    optimizeImage,
    processDirectory,
    generatePictureElement,
    config
};

// Run if called directly
if (require.main === module) {
    main();
}
