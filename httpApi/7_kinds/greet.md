curl -X POST \
-H 'Content-Type: application/json' \
-d '{"jsonrpc":"2.0","id":1,"method":"get_users","params":{}}' \
http://localhost:8080/json-rpc
