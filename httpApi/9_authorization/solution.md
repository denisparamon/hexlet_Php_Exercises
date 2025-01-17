TOKEN=$(curl -s -X POST http://localhost:8080/login \
-H "Content-Type: application/json" \
-d '{"username": "admin", "password": "admin"}' \
| grep -oP '(?<="token":")[^"]+')

curl -s -X GET http://localhost:8080/private \
-H "Authorization: Bearer I4f1usSWLgHN1oAGrAaKwBKLNiiyg1WS5GboYgDDtEpUAg0nyt1hFag4ecs7hqeIDXqZ2Dk6ij1zKy3Wqw6FlQT7zA8nlffPEhDZZsIwgE9eZH9tXl1ybEHY"
