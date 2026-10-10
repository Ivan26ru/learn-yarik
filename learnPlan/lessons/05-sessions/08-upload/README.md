# Занятие 8. Загрузка картинки (`task_17.php`)

[Модуль 5. Сессии, вход по паролю, загрузка файлов](../README.md) · занятие 8 из 9

**Где работаем:** `marlin/20tasks/task_17.php` и новый `store17.php`.

```html
<form action="store17.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button>Загрузить</button>
</form>
```

```php
$name = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $name);
```

- [ ] Создай папку `marlin/20tasks/uploads/`. Обработчик сохраняет туда картинку под уникальным именем, а имя
      файла — в таблицу базы.
- [ ] `task_17.php` выводит все загруженные картинки из базы через `foreach` (вот тут массив к месту!).
- [ ] Пропускай только картинки: расширение `jpg`, `jpeg`, `png`, `webp` (`in_array`!) и размер до 2 МБ
      (`$_FILES['image']['size']`). Осторожно: у фото с телефона расширение бывает `JPG` большими буквами,
      поэтому перед проверкой переведи его в маленькие с помощью `strtolower()`.
- [ ] Почему файл переименовывают через `uniqid()`, а не оставляют имя, с которым его загрузили?

---

[← Занятие 7](../07-private-page/README.md) · [Занятие 9 →](../09-many-files/README.md)

**Практика:** [задания после занятия 8](../../../practice/05-sessions/README.md#после-занятия-8)
