<?php

namespace Tests\Feature;

use App\Models\NewsModel;
use CodeIgniter\Config\Factories;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\Database\Seeds\NewsSeeder;

/**
 * @internal
 */
final class NewsTest extends CIUnitTestCase
{
    use FeatureTestTrait;
    use DatabaseTestTrait;

    protected $refresh   = false;
    protected $namespace = 'App';
    protected $seed      = NewsSeeder::class;

    public function testGetNews()
    {
        $result = $this->get('news');

        $result->assertStatus(200);

        $result->assertSee('<title>CodeIgniter Tutorial</title>');
        $result->assertSee('Elvis was sighted at the Podunk internet cafe.');
    }

    public function testGetNewsWithMock()
    {
        $newsModel = $this->getMockBuilder(NewsModel::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getNews'])
            ->getMock();
        $newsModel->method('getNews')
            ->willReturn([
                [
                    'title' => 'Mocked title',
                    'slug'  => 'mocked-title',
                    'body'  => 'Mocked body. Bra, bra, bra...',
                ],
            ]);
        Factories::injectMock('models', NewsModel::class, $newsModel);

        $result = $this->get('news');

        $result->assertStatus(200);

        $result->assertSee('<title>CodeIgniter Tutorial</title>');
        $result->assertSee('Mocked body. Bra, bra, bra...');
        $result->assertDontSee('Elvis was sighted at the Podunk internet cafe.');
    }

    public function testPostNews()
    {
        $result = $this->post(
            'news',
            [
                'csrf_test_name' => csrf_hash(),
                'title'          => 'Test',
                'body'           => 'This is testing.',
            ]
        );

        $result->assertStatus(200);

        $result->assertSee('<title>CodeIgniter Tutorial</title>');
        $result->assertSee('News item created successfully.');
    }
}
