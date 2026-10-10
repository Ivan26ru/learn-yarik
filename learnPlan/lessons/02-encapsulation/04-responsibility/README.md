# Занятие 4. Одна ответственность

[Модуль 2. ООП: инкапсуляция и порядок в классах](../README.md) · занятие 4 из 6

**Где работаем:** эта папка.

В `marlin/OOP/class person.php` у человека есть свойства `author`, `year`, `price` и методы `setBook()`, `sellBook()`.
Но автор и год — это свойства **книги**, а не человека.

- [ ] Скопируй `Book.php` и `class person.php` в папку этого занятия (файл назови `Person.php`, без пробела).
- [ ] Убери из `Person` всё, что относится к книге.
- [ ] Добавь в `Person` приватный массив книг и методы:

```php
private array $books = [];

public function addBook(Book $book): void
{
    $this->books[] = $book; // [] в конце — добавить элемент в массив
}

public function showBooks(): string
{
    // пройди по $this->books и собери строку из $book->getBook()
}
```

- [ ] Создай Ярика, дай ему 3 книги и выведи список.

---

[← Занятие 3](../03-protected/README.md) · [Занятие 5 →](../05-files/README.md)

**Практика:** [задания после занятия 4](../../../practice/02-encapsulation/README.md#после-занятия-4)
