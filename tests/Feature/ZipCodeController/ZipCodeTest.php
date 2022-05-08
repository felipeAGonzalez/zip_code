<?php

namespace Tests\Feature;

use App\Helpers\Lang;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\ZipCode;
use Tests\TestCase;

class ZipCodeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $zipCode=38640;
        $response = $this->get('api/zip-codes/'.$zipCode);
        $code=ZipCode::where(['zip_code'=>$zipCode])->get()->toArray();
        $response->assertJson([
            'status' => true,
            'data' => $code,
        ]);
        $response->assertStatus(200);
    }

    public function testBasicTestAnotherState()
    {
        $code=58000;
        $response = $this->get('api/zip-codes/'.$code);
        $response->assertStatus(200);
    }
    public function testBasicTestBadInformation()
    {
        $code=5;
        $codeError = 'api.not_code';
        $response = $this->get('api/zip-codes/'.$code);
        $response->assertJson([
            'status' => false,
            'error' => Lang::get($codeError),
        ]);
        $response->assertStatus(404);
    }
}
