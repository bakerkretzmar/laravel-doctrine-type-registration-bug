<?php

namespace Tests\Feature;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_first_example()
    {
        $this->expectNotToPerformAssertions();

        Schema::create('table_one', function (Blueprint $table) {
            $table->xml('test_xml');
        });

        Schema::table('table_one', function (Blueprint $table) {
            $table->renameColumn('test_xml', 'test_renamed');
        });
    }

    public function test_second_example()
    {
        $this->expectNotToPerformAssertions();

        Schema::create('table_two', function (Blueprint $table) {
            $table->xml('test_more_xml');
        });

        Schema::table('table_two', function (Blueprint $table) {
            $table->renameColumn('test_more_xml', 'test_renamed_again');
        });
    }
}
