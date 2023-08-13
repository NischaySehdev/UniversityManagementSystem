// const fs=require('fs');
// const { traceDeprecation } = require('process');
// let path = "Backened files/", filePointer, selectContainer, optionContainer, count;
// function getProgramme(id) {
//     filePointer = fs.readFile("Backened files/programme.txt", "utf-8");
//     selectContainer = document.getElementById(id);
//     optionContainer = document.createElement('option');
//     count = 0;
//     while (filePointer) { // Need to check the file handling function
//         optionContainer.innerText = "" //Get the data from the text file
//         optionContainer.id = "programme"+count;
//         selectContainer.appendChild(optionContainer)        
//         ++count;
//     }
// }

// function getStudyCenter(id) {
//     let filePointer = fs.readFile(path+"study_center.txt", 'utf-8');
//     selectContainer = document.getElementById(id);
//     optionContainer = document.createElement('option');
//     count = 0;
//     while (filePointer) { // Need to check the file handling function
//         optionContainer.innerText = "" //Get the data from the text file
//         optionContainer.id = "studycenter"+count;
//         selectContainer.appendChild(optionContainer)        
//         ++count;
//     } 
// }

// function getAssignments(id){
//     let table = document.getElementById(id);
//     let tableBody = document.createElement("tbody");
//     filePointer = fs.readFile("Backened files/assignment.txt", "utf-8");
//     while (filePointer) { // Need to check the file handling function
//         // A loop will run for a single record and will go till the end of the record
//         let tableRow = document.createElement("tr");
//         while (true) { // A single record wil be placed here.
//             let tableColumn = document.createElement("td");
//             tableColumn.innerText = "";
//             tableRow.appendChild(tableColumn);
//         }
//         tableRow.appendChild(tableBody);
//     }
//     tableBody.appendChild(table);
// }