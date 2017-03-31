<?php

use Illuminate\Database\Seeder;

class DiscrepancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$category = DiscrepancyCategory::create(['name' => 'Land/Area',]);
    	
    	DiscrepancyList::create([
    		'name' => 'Education college : 2500 sqr. mtr.',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Law, Information Technology, Management, Arts & Science Degree College: Under boundary of Municipal Corporation : 2 Acres  (For Girls college: 2 Acres) Under boundary of Municipal Committee: 3 Acres (For Girls college: 2 Acres) Outside boundary of Municipal Committee & Municipal Corporation: 5 Acres  (For Girls college: 3 Acres)',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Physical Education College: 5 Acres',
    		'id_discrepancy_category' => $category['id'],
    		]);




    	$category = DiscrepancyCategory::create(['name' => 'Infrastructure of College',]);
    	
    	DiscrepancyList::create([
    		'name' => 'Building Map is Approved',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Principal Office',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'No. of Classrooms and Size of Classroom according to UGC Norms (10 sqr. feet per student)',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Staff Room',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Common Room For Boys/Girls',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Separate Restrooms For Boys & Girls',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Conference Room',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Seminar Hall',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Director Room',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Agriculture Lab',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Science Lab : 40 Sqr. feet per student',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Hostel for Students',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Residence of Principle',
    		'id_discrepancy_category' => $category['id'],
    		]);




    	$category = DiscrepancyCategory::create(['name' => 'Approval',]);
    	
    	DiscrepancyList::create([
    		'name' => 'AICTE (For Technical and Management Courses)',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'NCTE (For Education Courses)',
    		'id_discrepancy_category' => $category['id'],
    		]);




    	$category = DiscrepancyCategory::create(['name' => 'Computer Lab',]);
    	
    	DiscrepancyList::create([
    		'name' => 'Licensed Software',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'False Ceiling',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Air Conditioner',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Internet Connection',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Network Connectivity',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'LED Projector',
    		'id_discrepancy_category' => $category['id'],
    		]);




    	$category = DiscrepancyCategory::create(['name' => 'Other Discrepancies',]);
    	
    	DiscrepancyList::create([
    		'name' => 'Required No. of Teachers for requested courses are appointed',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Selection of Teaching Staff according to Rules and Norms of Punjabi University Patiala',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Regular Principal',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Selection of Principal according to UGC or University Norms',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Tution fees and other charges according to University rules',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Facilities for physical challenged persons',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Permanent water supply',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Permanent electricity connection',
    		'id_discrepancy_category' => $category['id'],
    		]);
    	
    	DiscrepancyList::create([
    		'name' => 'Books in Library for existing and new requested courses',
    		'id_discrepancy_category' => $category['id'],
    		]);
    }
}
