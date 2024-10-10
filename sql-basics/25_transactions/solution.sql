BEGIN;

DELETE FROM user_items
WHERE username = 'lord_mormont' AND item = 'Longclaw';

INSERT INTO user_items (username, item, received_at)
VALUES ('jon', 'Longclaw', CURRENT_TIMESTAMP);

COMMIT;
