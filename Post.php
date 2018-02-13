<?php

declare(strict_types=1);

class Author {

  protected $title;
  protected $author = new Author();

  public function getTitle(): string
  {
      return $this->title;
  }
}
