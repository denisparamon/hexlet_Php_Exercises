<?php

namespace App\Solution;

function transfer($conn, $from, $to, $amount)
{
    try {
        $conn->beginTransaction();
        $stmt = $conn->prepare('SELECT balance FROM accounts WHERE id = :from');
        $stmt->execute([':from' => $from]);
        $fromAccount = $stmt->fetch();

        if (!$fromAccount) {
            throw new \Exception('Аккаунт отправителя не найден');
        }
        if ($fromAccount['balance'] < $amount) {
            throw new \Exception('Недостаточно средств на счете');
        }

        $stmt = $conn->prepare('UPDATE accounts SET balance = balance - :amount WHERE id = :from');
        $stmt->execute([':amount' => $amount, ':from' => $from]);

        $stmt = $conn->prepare('SELECT id FROM accounts WHERE id = :to');
        $stmt->execute([':to' => $to]);
        if (!$stmt->fetch()) {
            throw new \Exception('Аккаунт получателя не найден');
        }

        $stmt = $conn->prepare('UPDATE accounts SET balance = balance + :amount WHERE id = :to');
        $stmt->execute([':amount' => $amount, ':to' => $to]);

        $conn->commit();
    } catch (\Exception $e) {
        $conn->rollBack();
    }
}
