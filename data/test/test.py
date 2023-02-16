# # from django.template import Engine
# # import pandas as pd

# # db = pd.read_sql("data/db/db_project.sql")

# # print(db)

# import sqlite3 as sq

# conn = sq.connect("data/db/db_project.sql")

# cursor = conn.cursor()

# cursor.execute("""
# CREATE TABLE comment (
#     id INTEGER PRIMARY KEY AUTOINCREMENT,
#     name VARCHAR(50),
#     comment TEXT
# )
# """)

# conn.commit()

# conn.close()