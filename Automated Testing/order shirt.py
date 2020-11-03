from selenium import webdriver
from time import sleep

browser = webdriver.Chrome(r"C:\Users\Dell\Downloads\chromedriver")
browser.get("http://localhost/dbms%20project/login.php")
browser.maximize_window()
sleep(2)

#enter username
browser.find_element_by_css_selector('body > header > div.login-box > form > div:nth-child(1) > input[type=text]').send_keys('deep')
sleep(1)
#enter password
browser.find_element_by_css_selector('body > header > div.login-box > form > div:nth-child(2) > input[type=password]').send_keys('Deep1842')
sleep(1)
browser.find_element_by_css_selector('body > header > div.login-box > form > input').click()
sleep(2)

browser.find_element_by_css_selector('body > header > div.left > ul > div.dropdown > button').click()
sleep(1)
browser.find_element_by_css_selector('body > header > div.left > ul > div.dropdown > div > div > div:nth-child(1) > div.top > a:nth-child(2)').click()
sleep(3)

browser.find_element_by_css_selector('body > header > div:nth-child(4) > div > div.cart > form > button').click()
sleep(1)
browser.find_element_by_css_selector('body > header > div:nth-child(7) > div > div.buy > form > button').click()
sleep(3)


browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > input.name').send_keys("Deep Patel")
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > input.name2').send_keys("9521280212")
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > input.pin').send_keys("360001")
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > input.pin2').send_keys('Sector Gh-4')
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > textarea').send_keys('abc')
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > input.email').send_keys('201851082@iiitvadodara.ac.in')
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > input.city').send_keys('Gandhinagar')
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > div > select').send_keys("Gujarat")
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab2 > label:nth-child(12) > span').click()
sleep(1)
browser.find_element_by_css_selector('body > div.container > div.order > form > div.tab3 > input').click()
sleep(1)
