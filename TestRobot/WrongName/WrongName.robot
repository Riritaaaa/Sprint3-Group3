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
    TC04 : Input Personal Info
    Input text    //*[@id="field-firstname"]    
    Input text    //*[@id="field-lastname"]    
    Input text    //*[@id="field-email"]    demo@gmail.com
    Select Checkbox    //*[@id="customer-form"]/div/div[4]/div[1]/span/label/input
    Select Checkbox    //*[@id="customer-form"]/div/div[5]/div[1]/span/label/input
    Click Button    //*[@id="customer-form"]/footer/button
    Capture Page Screenshot    WrongName.jpg   
Teardown
    Close Browser



