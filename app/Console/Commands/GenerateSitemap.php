<?php

namespace App\Console\Commands;

use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SitemapGenerator::create('https://secret-spices.net')
            ->getSitemap()

            ->add(Url::create('/')->setPriority(1))
            ->add(Url::create('/produits')->setPriority(0.9))
            ->add(Url::create('/recettes')->setPriority(0.8))
            ->add(Url::create('/recipes-videos')->setPriority(0.8))
            ->add(Url::create('/engagements')->setPriority(0.8))
            ->add(Url::create('/about')->setPriority(0.8))
            ->add(Url::create('/contact')->setPriority(0.8))
            ->add(Url::create('/galery')->setPriority(0.8))
            ->add(Url::create('/evenements')->setPriority(0.8))
            ->add(Url::create('/legal')->setPriority(0.5))
            ->add(Url::create('/health-information')->setPriority(0.5))
            ->add(Url::create('/personnal-data')->setPriority(0.5))
            //here we have added four links, but you can add as many as you'd like

            //location where you want to generate your sitemap file
            ->writeToFile(public_path('sitemap.xml'));

        return 'Sitemap generated';
    }
}