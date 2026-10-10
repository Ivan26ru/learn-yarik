# Занятие 3. `protected` и наследование

[Модуль 2. ООП: инкапсуляция и порядок в классах](../README.md) · занятие 3 из 6

**Где работаем:** эта папка. Скопируй сюда `Car.php` из `02-getters-setters`.

Сделай свойства приватными — и `SportCar` перестанет видеть `$this->brand`. Для этого и нужен `protected`.

```php
class SportCar extends Car
{
    public function infoCar(): string
    {
        // parent:: вызывает метод родителя — не нужно копировать его код
        return parent::infoCar() . ' Максимальная скорость: ' . $this->maxSpeed() . ' км/ч';
    }
}
```

- [ ] Сделай `brand` и `model` защищёнными (`protected`), а `SportCar::infoCar()` перепиши через `parent::infoCar()`.
- [ ] Добавь в `SportCar` своё приватное свойство `maxSpeed` и передавай его в конструкторе. Подсказка: конструктор
      дочернего класса должен вызвать `parent::__construct(...)`.

---

[← Занятие 2](../02-getters-setters/README.md) · [Занятие 4 →](../04-responsibility/README.md)

**Практика:** [задания после занятия 3](../../../practice/02-encapsulation/README.md#после-занятия-3)
