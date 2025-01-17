-- Step 1: Create the database
CREATE DATABASE chrono_explorer;

-- Step 2: Use the newly created database
USE chrono_explorer;

-- Step 3: Create the 'users' table
CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Step 4: Insert sample data into the 'users' table
INSERT INTO users (email, password_hash, created_at) VALUES
('alice@example.com', '*11AFFE8AAC91CAB197826412C4E9FE99701DCCF1', '2024-12-12 17:31:04'),
('bob@example.com', '*930692719338EA8E68B2981CCC00DD59A6AD90BB', '2024-12-12 17:31:04'),
('charlie@example.com', '*28CD854237D094DEC323674A44FE3E2920341BF3', '2024-12-12 17:31:04'),
('diana@example.com', '*3BB46D56EDEF205F7F6A19226475316A7CEAC327', '2024-12-12 17:31:04'),
('eva@example.com', '*495375452F49A77784D64F7956042943FAA8B38F', '2024-12-12 17:31:04'),
('rathis@gmail.com', '$2y$10$ljVXQz2xY5hDqKryjyk1Be5jJspxMXSAH3gD45WbhJ1vK9Y96zWjO', '2024-12-27 05:14:39'),
('rathi@gmail.com', '$2y$10$SyZq1l6J7WkFQfFM8fFybuHRmrRVw9YaGruJKSfevGh/tU2NGk6t6', '2024-12-27 05:15:42');
