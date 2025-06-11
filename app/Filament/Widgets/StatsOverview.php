<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Projects', Project::count())
                ->description('Number of projects created')
                ->descriptionIcon('heroicon-s-arrow-trending-up')
                ->chart([7, 10, 12, 14, 12, 10, 13])
                ->color('success'),
            Stat::make('Total Posts', Post::count())
                ->description('Number of posts created')
                ->descriptionIcon('heroicon-s-arrow-trending-up')
                ->chart([10, 12, 14, 12, 10, 13, 12])
                ->color('warning'),
            Stat::make('Total Messages', Contact::count())
                ->description('Number of messages received')
                ->descriptionIcon('heroicon-s-arrow-trending-up')
                ->chart([15, 18, 20, 18, 15, 18, 20])
                ->color('danger'),
        ];
    }
}