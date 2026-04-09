# CRUD-application (Create, Read, Update, Delete)

# SQL Script for MVC CRUD Application

This script creates the database **`crud_articles`** and performs the following actions:

1. Creates the database **`crud_articles`** (if it does not already exist).
2. Creates the table **`articles`** with the following columns:
   - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
   - `name` (VARCHAR, 255 characters, NOT NULL)
   - `price` (DECIMAL(5,2))
3. Inserts demo data into the **`articles`** table.

---

## How to Execute the Script

---

### Option 1: Using phpMyAdmin or MySQL Workbench
1. Open phpMyAdmin or MySQL Workbench.
2. Select a database (e.g., `mysql`).
3. Navigate to the **SQL** tab.
4. Click **"Choose File"** and select the `data.sql` file.
5. Click **"Execute"** (or "Go").

---

### Option 2: Using the MySQL Command Line
Run the following command in the terminal or command prompt:
```bash
mysql -u [username] -p < data.sql