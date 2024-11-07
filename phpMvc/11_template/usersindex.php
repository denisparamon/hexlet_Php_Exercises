<!-- templates/users/index.phtml -->
<h1>Список пользователей</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td>
                <a href="/users/<?= htmlspecialchars($user['id']) ?>">
                    <?= htmlspecialchars($user['firstName']) ?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
