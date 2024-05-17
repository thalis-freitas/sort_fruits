<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../sort_fruits.php';

class SortFruitsTest extends TestCase
{
    private $tempFile;

    protected function setUp(): void
    {
        $this->tempFile = tempnam(sys_get_temp_dir(), 'fruits');
    }

    protected function tearDown(): void
    {
        if (file_exists($this->tempFile)) {
            unlink($this->tempFile);
        }
    }

    public function testReadFruitsFile()
    {
        file_put_contents(
            $this->tempFile,
            "Uva\nBanana\nLaranja\nAbacaxi\nManga"
        );

        $fruits = readFruitsFile($this->tempFile);

        $this->assertEquals(
            ['Uva', 'Banana', 'Laranja', 'Abacaxi', 'Manga'],
            $fruits
        );
    }

    public function testReadFruitsIgnoreNewLines()
    {
        file_put_contents(
            $this->tempFile,
            "Uva\nBanana\nLaranja\nAbacaxi\nManga\n\n"
        );

        $fruits = readFruitsFile($this->tempFile);

        $this->assertEquals(
            ['Uva', 'Banana', 'Laranja', 'Abacaxi', 'Manga'],
            $fruits
        );
    }

    public function testReadFruitsSkipEmptyLines()
    {
        file_put_contents(
            $this->tempFile,
            "Uva\n\nBanana\nLaranja\n\nAbacaxi\nManga\n"
        );

        $fruits = readFruitsFile($this->tempFile);

        $this->assertEquals(
            ['Uva', 'Banana', 'Laranja', 'Abacaxi', 'Manga'],
            $fruits
        );
    }

    public function testSortFruits()
    {
        $fruits = ['Uva', 'Banana', 'Laranja', 'Abacaxi', 'Manga'];

        sortFruits($fruits);

        $this->assertEquals(
            ['Abacaxi', 'Banana', 'Laranja', 'Manga', 'Uva'],
            $fruits
        );
    }

    public function testShowFruits()
    {
        $fruits = ['Abacaxi', 'Banana', 'Manga', 'Uva'];

        ob_start();
        showFruits($fruits);
        $output = ob_get_clean();

        $this->assertEquals(
            '<h1>Frutas Ordenadas:</h1><li>Abacaxi</li><li>Banana</li><li>Manga</li><li>Uva</li>',
            $output);
    }
}
