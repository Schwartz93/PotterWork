<?php


use PHPUnit\Framework\TestCase;
use App\BookHandler;

class BookHandlerTest extends TestCase
{
    /**
     * @test
     */
    public function TestWorks()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function JsonFileExists()
    {
        $this->assertFileExists("../data/books.json");
    }

    /**
     * @test
     */
    public function FileIsJson()
    {
        $this->assertJsonFileEqualsJsonFile("../data/books.json", "../data/books.json");
    }
    
    /**
     * @test
     */
    public function getBooksReturnsArray()
    {
        $bookhandler = new BookHandler();
        $books = $bookhandler->getBooks();
        $this->assertIsArray($books);
    }



}
