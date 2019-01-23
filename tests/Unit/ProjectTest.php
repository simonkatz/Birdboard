<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_has_a_path()
    {
        $project = factory('App\Project')->create();
        
        $this->assertEquals('/projects/' . $project->id, $project->path());
    }
    
    /** @test */
    public function it_has_an_owner()
    {
        $this->actingAs(factory('App\User')->create());
        
        $project = factory('App\Project')->create(['owner_id' => auth()->id()]);
        
        $this->assertEquals($project->owner->id, auth()->id());
    }
}
