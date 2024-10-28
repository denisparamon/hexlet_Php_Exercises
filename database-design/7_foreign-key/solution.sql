CREATE TABLE users (
                       id BIGSERIAL PRIMARY KEY,
                       username VARCHAR(50) UNIQUE NOT NULL,
                       email VARCHAR(255) NOT NULL,
                       created_at TIMESTAMP NOT NULL
);

CREATE TABLE topics (
                        id BIGSERIAL PRIMARY KEY,
                        user_id BIGINT,
                        body TEXT NOT NULL,
                        created_at TIMESTAMP NOT NULL,
                        FOREIGN KEY (user_id) REFERENCES users(id)
);
