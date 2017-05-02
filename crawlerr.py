import re
import requests
from bs4 import BeautifulSoup
import MySQLdb

def intern_crawler():
    url = "http://internshala.com/internships/computer%20science-internship-in-delhi/sort-recent/page-1"
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text, "html.parser")

    db = MySQLdb.connect("localhost", 'root', '', "shashwat")
    cursor = db.cursor()
    category = ""
    company = ""

    for link in soup.findAll("div",class_="container-fluid individual_internship"):
        titleheader=link.find("div",class_="individual_internship_header")
        q=0
        for headercontainer in titleheader.findAll("h4"):
            if(q==0):
                category = headercontainer.get_text()
            else:
                company = headercontainer.get_text()
        #print(titleheader.get_text().strip())

        conentheader=link.find("div",class_="individual_internship_details")
        locationheader=conentheader.findAll("span")[1:2]
        #print(locationheader[0].get_text())
        t=0
        startdate = ""
        duration = ""
        stipend = ""
        postedon = ""
        applyby = ""
        for table_values in conentheader.findAll("td"):
            if(t==0):
                startdate= (table_values.get_text()).strip()
            elif(t==1):
                 duration= (table_values.get_text()).strip()
            elif(t==2):
                 stipend= (table_values.get_text()).strip()
            elif(t==3):
                 postedon=(table_values.get_text()).strip()
            elif(t==4):
                 applyby= (table_values.get_text()).strip()
            t=t+1

       # text = link.get_text()
        #text = text.strip()
    #   plain = str(text)
    #   href = link.get('href')

        #text = (re.sub('[\s+]', ' ', text))

    #   text=(re.sub('\t',' ',text))
    #    if not text.isdigit():
        #print(text)

        sql = 'INSERT INTO internshala(category,company,startdate,duration,postedon,applyby,stipend)VALUES("%s","%s","%s","%s","%s","%s","%s")' % (
        category,company,startdate,duration,postedon,applyby,stipend)

        cursor.execute(sql)

        db.commit()

intern_crawler()


