<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test TodosController
 *
 * @author mizuki-y <mizuki-y@syati.info>
 */
class TodosControllerTest extends WebTestCase
{
    protected $client = null;

    protected function setUp()
    {
        $this->client = static::createClient();
    }
    /**
     * Test indexAction
     *
     * @return void
     */
    public function testIndex()
    {
        $crawler = $this->client->request('GET', '/todos/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        //        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }

    public function testNew()
    {
        $crawler = $this->client->request('GET', '/todos/new');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test createAction
     *
     * @return void
     */
    public function testCreate()
    {
    }
    /**
     * Test showAction
     *
     * @return void
     */
    public function testShow()
    {
    }
    /**
     * Test createAction
     *
     * @return void
     */
    public function testUpdate()
    {
    }
    /**
     * Test deleteAction
     *
     * @return void
     */
    public function testDelete()
    {
    }
}
