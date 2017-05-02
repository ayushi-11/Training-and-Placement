import re
import requests
from bs4 import BeautifulSoup
import MySQLdb

def intern_crawler():
    url = "http://www.jiit.ac.in/placements"
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text, "html.parser")

    db = MySQLdb.connect("localhost", 'root', '', "shashwat")
    cursor = db.cursor()

    for link in soup.findAll("td"):


        text = link.get_text()
        text = text.strip()
    #   plain = str(text)
    #   href = link.get('href')
        text = (re.sub('[\s+]', ' ', text))

    #   text=(re.sub('\t',' ',text))
        if not text.isdigit():
            sql = 'INSERT INTO company(CompanyName)VALUES("%s")' % (text)

            cursor.execute(sql)

            db.commit()



intern_crawler()
  