*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${ImageFilePath}    C:/Users/coopt/Desktop/TestRobot/qrcode.jpg

*** Test Cases ***
TC01 : Open Catalog
    Open Browser    http://localhost:8080/    Chrome
    Log    This is executed.

TC02 : Click Product
    Click Element    //*[@id="content"]/section/div/div/article/div/div[1]/a 
    Click Element    //*[@id="add-to-cart-or-refresh"]/div[2]/div/div[2]/button
    Sleep    3s
    Click Element    //*[@id="blockcart-modal"]/div/div/div[2]/div/div[2]/div/div/a
    Click Element    //*[@id="main"]/div/div[2]/div/div[2]/div/a
    Location Should Be    http://localhost:8080/order

TC03 : Select Invoice
    Select Checkbox    //*[@id="needinvoice"]
    Click Button    //*[@id="customer-form"]/footer/button

TC04 : Input Personal Info
    Input text    //*[@id="field-firstname"]    demo
    Input text    //*[@id="field-lastname"]    demo
    Input text    //*[@id="field-email"]    demo@gmail.com
    Select Checkbox    //*[@id="customer-form"]/div/div[4]/div[1]/span/label/input
    Select Checkbox    //*[@id="customer-form"]/div/div[5]/div[1]/span/label/input
    Click Button    //*[@id="customer-form"]/footer/button

TC05 : Write Address
    Select From List By Value    id_country    204
    Sleep    1s
    Input text    //*[@id="field-company"]    KKU
    Input text    //*[@id="field-vat_number"]    1430301342142
    Input text    //*[@id="field-address1"]    ${EMPTY} 
    Input text    postcode    40000
    Input text    //*[@id="field-city"]    khonkaen 
    Select Checkbox    //*[@id="use_same_address"]
    Input text    //*[@id="field-phone"]    0630525780 
    Sleep    1s
    Click Element    confirm-addresses
    Capture Page Screenshot    WrongZipcode.jpg
Teardown
    Close Browser
