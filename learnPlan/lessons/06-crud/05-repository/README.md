# Занятие 5. Класс `UserRepository`

[Модуль 6. CRUD по-взрослому: безопасность и порядок](../README.md) · занятие 5 из 5

**Где работаем:** папка `app/` этого модуля (`learnPlan/lessons/06-crud/app/`) — одна программа, которую улучшаем от занятия к занятию.

Соберём весь SQL в одном классе. Тогда в страницах останется только «что сделать», а «как» спрячется внутри.

```php
class UserRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all(): array { ... }
    public function find(int $id): ?array { ... }
    public function create(array $data): void { ... }
    public function update(int $id, array $data): void { ... }
    public function delete(int $id): void { ... }
}
```

- [ ] Напиши класс в `UserRepository.php` и перепиши все страницы через него:
      `$users = $repository->all();`.
- [ ] Передавай в `execute()` только нужные поля, а не весь `$_POST` целиком: так лишнее поле из формы не сломает
      запрос.

---

[← Занятие 4](../04-delete-post/README.md)

**Практика:** [задания после занятия 5](../../../practice/06-crud/README.md#после-занятия-5)
