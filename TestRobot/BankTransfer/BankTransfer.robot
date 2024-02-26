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
    Click Button    //*[@id="customer-form"]/footer/button
    Sleep    2s

TC04 : Choose Payment
    Click Element    //*[@id="payment-option-1"]
    Choose File    //*[@id="payment-option-1-additional-information"]/form/input    ${ImageFilePath}
    Sleep    2s
    Click Button    //*[@id="payment-option-1-additional-information"]/form/button
    Sleep    2s
    Capture Page Screenshot    BankTransfer.jpg     
Teardown
    Close Browser



