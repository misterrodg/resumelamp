<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $robertHalf = Experience::create([
            'company_name' => 'Robert Half',
            'role' => 'Aviation Subject Matter Expert',
            'date_from' => '2022-11-01',
            'date_to' => '2024-08-01'
        ]);

        $robertHalf->summaryPoints()->createMany([
            ['content' => 'Provided guidance to a team of developers for their aviation products.'],
            ['content' => 'Explained various aviation-related concepts, and provided strategies for translating those concepts into code.'],
            ['content' => 'Validated new features and fixes for use by pilots, dispatchers and planners.']
        ]);

        $selfEmployed = Experience::create([
            'company_name' => 'Self Employed',
            'role' => 'Full Stack Developer',
            'date_from' => '2020-05-01'
        ]);

        $selfEmployed->summaryPoints()->createMany([
            ['content' => 'Hestia Harlow - 5/2020 to 3/2021: Full stack developer - MySQL and Laravel with ShipStation Integration.'],
            ['content' => 'Data Licensing Alliance - 6/2021 to Present: Full stack developer - MySQL, React JS, and Laravel on AWS (S3 and CloudFront).']
        ]);

        $precision = Experience::create([
            'company_name' => 'Precision Manuals Development Group',
            'role' => 'Full Stack Developer',
            'date_from' => '2013-08-01',
            'date_to' => '2019-12-01'
        ]);

        $precision->summaryPoints()->createMany([
            ['content' => 'Software Developer: C++, C#. Full stack developer: Vanilla JS, Vanilla PHP, and MSSQL.'],
            ['content' => 'Beta Tester: Test software prior to release to find and report various software issues.']
        ]);

        $potomacWave = Experience::create([
            'company_name' => 'PotomacWave',
            'role' => 'Deputy Project Manager',
            'date_from' => '2017-01-01',
            'date_to' => '2019-06-01'
        ]);

        $potomacWave->summaryPoints()->createMany([
            ['content' => 'Managed team of developers to manage and enhance the US Coast Guard Knowledge Management Site.'],
            ['content' => 'SharePoint, TypeScript']
        ]);

        $pragmatics = Experience::create([
            'company_name' => 'Pragmatics',
            'role' => 'Task Lead',
            'date_from' => '2015-04-01',
            'date_to' => '2016-09-01'
        ]);

        $pragmatics->summaryPoints()->createMany([
            ['content' => 'Coordinated projects across eight FAA divisions to modernize aviation.'],
            ['content' => 'Migrated project tracking from Word and Excel to SharePoint and Access with automated reporting tools.']
        ]);

        $apexSystems = Experience::create([
            'company_name' => 'Apex Systems',
            'role' => 'Project Control Specialist',
            'date_from' => '2014-07-01',
            'date_to' => '2015-04-01'
        ]);

        $apexSystems->summaryPoints()->createMany([
            ['content' => 'Database Administrator: Access and Oracle.'],
            ['content' => 'Automated reporting through Access with customization in VBA.']
        ]);

        $sraInternational = Experience::create([
            'company_name' => 'SRA International',
            'role' => 'Project Analyst',
            'date_from' => '2012-08-01',
            'date_to' => '2014-07-01'
        ]);

        $sraInternational->summaryPoints()->createMany([
            ['content' => 'USDA: Migrated project tracking from Word documents to SharePoint and Access with automated reporting tools.'],
            ['content' => 'FAA: Migrated project tracking from Word and Excel to SharePoint and Access with automated reporting tools.']
        ]);

        $newHorizons = Experience::create([
            'company_name' => 'New Horizons Computer Learning Center',
            'role' => 'Training Manager',
            'date_from' => '2010-06-01',
            'date_to' => '2012-08-01'
        ]);

        $newHorizons->summaryPoints()->createMany([
            ['content' => 'Managed instructor team, providing classes on Microsoft and other technology products.'],
            ['content' => 'Personal concentration in Access, Excel, VBA, MSSQL, F5 Networks products, and Security+.']
        ]);
    }
}
