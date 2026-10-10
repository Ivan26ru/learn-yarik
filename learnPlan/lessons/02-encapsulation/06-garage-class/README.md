# Занятие 6. Мини-проект: класс `Garage`

[Модуль 2. ООП: инкапсуляция и порядок в классах](../README.md) · занятие 6 из 6

**Где работаем:** эта папка. Скопируй сюда классы и `index.php` из `05-files`.

```php
class Garage
{
    private string $owner;
    private array $cars = [];

    public function __construct(string $owner) { ... }
    public function addCar(Car $car): void { ... }
    public function count(): int { ... }           // подсказка: count($this->cars)
    public function totalPrice(): int { ... }      // сумма цен всех машин
    public function mostExpensive(): ?Car { ... }  // самая дорогая (или null, если гараж пуст)
    public function showAll(): string { ... }
}
```

- [ ] Напиши класс `Garage` в файле `Garage.php`.
- [ ] В `index.php` создай гараж, поставь в него 4 машины (обычные и спортивные) и выведи: список, количество,
      общую стоимость, самую дорогую.

---

[← Занятие 5](../05-files/README.md)

**Практика:** [задания после занятия 6](../../../practice/02-encapsulation/README.md#после-занятия-6)
