<?php
declare(strict_types=1);
class Book
{
    public string $author;
    public int $year;
    public int $pages;
    public string $states;
    const ID = 7;
    public function __construct
    (
        string $author,
        int $year,
        int $pages,
        string $states
    )
    {
        $this->author = $author;
        $this->year = $year;
        $this->pages = $pages;
        $this->states = $states;
    }
    public function getBook(): string
    {
        return ' Автор ' . $this->author .
            ' год ' . $this->year .
            ' страницы ' . $this->pages .
            ' состояние ' . $this->states .
            '<br>' ;
    }
}
$book = new Book('А.С.Пушкин', 1965, 234, "хорошее");