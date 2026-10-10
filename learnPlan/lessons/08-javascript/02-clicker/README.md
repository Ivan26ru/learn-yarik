# Занятие 2. Кнопка-кликер

[Модуль 8 (бонус). Первые шаги в JavaScript](../README.md) · занятие 2 из 5

**Где работаем:** эта папка: `clicker.html`.

```html
<button id="btn">Нажми меня</button>
<p id="result">0</p>

<script>
    let count = 0;
    document.querySelector('#btn').addEventListener('click', function () {
        count++;
        document.querySelector('#result').textContent = count;
    });
</script>
```

- [ ] Сохрани пример в `clicker.html` и запусти. Сравни со счётчиком из `task_14.php`: что происходит со страницей в каждом случае?
- [ ] Добавь кнопку «Сбросить».

---

[← Занятие 1](../01-console/README.md) · [Занятие 3 →](../03-dark-theme/README.md)

**Практика:** [задания после занятия 2](../../../practice/08-javascript/README.md#после-занятия-2)
