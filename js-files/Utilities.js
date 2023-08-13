const data = decodeURIComponent(document.cookie).split(";");
export {setData, setAssignmentDetails, setStudentPersoalInformation};
function setData(type) {
    let keyStart = type + DELIMINATOR_2 + START, keyEnd = type + DELIMINATOR_2 + END;
    let list = [];
    let index = getIndexNumber(type)
    list = removeHeadAndTail(data[index], keyStart, keyEnd).trim();
    list = list.split(DELIMINATOR)
    for (let optionIndex = 0; optionIndex < list.length && list[optionIndex].length!=0; optionIndex++) {
        let optionContainer = document.createElement('option');
        optionContainer.id = type + DELIMINATOR + index;
        optionContainer.innerText = list[optionIndex];
        if(type==(PROGRAM)){
            Programme.appendChild(optionContainer);
        }else if(type==(STUDY_CENTER)){
            Studycenter.appendChild(optionContainer);
        }
    }
}

function getIndexNumber(type) {
    for (let index = 0; index < data.length; index++) {
        if(data[index].startsWith(" "+type) || data[index].startsWith(type)){
            return index;
        }
    }
    return -1;
}
function removeHeadAndTail(list, keyStart, keyEnd ) {
    if(list[0]==" "){
        list = list.replace(" ", "");
    }
    let beginning = list.substring(keyStart.length + 1);
    return beginning.slice(0, (-1)*(keyEnd.length))
}
function setAssignmentDetails() {   
    let beginningIndex = getIndexNumber("assignmentStart");
    let tableBody = document.getElementById('tableBody');   
    let tableRow = document.createElement('tr');   
    let tableColumn_0 = document.createElement('td');   
    tableColumn_0.innerText = 0;
    tableRow.appendChild(tableColumn_0);   
    let tableColumn_1 = document.createElement('td');   
    tableColumn_1.innerText = data[beginningIndex+1];
    tableRow.appendChild(tableColumn_1);   
    let tableColumn_2 = document.createElement('td');   
    tableColumn_2.innerText = data[beginningIndex+2];
    tableRow.appendChild(tableColumn_2);   
    let tableColumn_3 = document.createElement('td');   
    tableColumn_3.innerText = data[beginningIndex+3];
    tableRow.appendChild(tableColumn_3);
    let tableColumn_4 = document.createElement('td');   
    tableColumn_4.innerText = data[beginningIndex+4];
    tableRow.appendChild(tableColumn_4);
    let tableColumn_5 = document.createElement('td');   
    tableColumn_5.innerText = data[beginningIndex+5];
    tableRow.appendChild(tableColumn_5);
    let tableColumn_6 = document.createElement('td');   
    tableColumn_6.innerText = data[beginningIndex+6];
    tableRow.appendChild(tableColumn_6);
    let tableColumn_7 = document.createElement('td');   
    tableColumn_7.innerText = data[beginningIndex+7];
    tableRow.appendChild(tableColumn_7);
    let tableColumn_8 = document.createElement('td');   
    tableColumn_8.innerText = data[beginningIndex+8];
    tableRow.appendChild(tableColumn_8);
    let tableColumn_9 = document.createElement('td');   
    tableColumn_9.innerText = data[beginningIndex+9];
    tableRow.appendChild(tableColumn_9);   
    tableBody.appendChild(tableRow)
}

// @param Programme has the id of the option in the page
function setStudentPersoalInformation() {
    console.log(data);
    let beginningIndex = getIndexNumber("personalInformationStart");
    let tableBody = document.getElementById('tableBody');   
    let tableRow = document.createElement('tr');   
    let tableColumn_0 = document.createElement('td');   
    tableColumn_0.innerText = 0;
    tableRow.appendChild(tableColumn_0);   
    let tableColumn_1 = document.createElement('td');   
    tableColumn_1.innerText = data[beginningIndex+1];
    tableRow.appendChild(tableColumn_1);   
    let tableColumn_2 = document.createElement('td');   
    tableColumn_2.innerText = data[beginningIndex+2];
    tableRow.appendChild(tableColumn_2);   
    let tableColumn_3 = document.createElement('td');   
    tableColumn_3.innerText = data[beginningIndex+3];
    tableRow.appendChild(tableColumn_3);
    let tableColumn_4 = document.createElement('td');   
    tableColumn_4.innerText = data[beginningIndex+4];
    tableRow.appendChild(tableColumn_4);
    let tableColumn_5 = document.createElement('td');   
    tableColumn_5.innerText = data[beginningIndex+5];
    tableRow.appendChild(tableColumn_5);
    let tableColumn_6 = document.createElement('td');   
    tableColumn_6.innerText = data[beginningIndex+6];
    tableRow.appendChild(tableColumn_6);
    let tableColumn_7 = document.createElement('td');   
    tableColumn_7.innerText = data[beginningIndex+7];
    tableRow.appendChild(tableColumn_7);
    tableBody.appendChild(tableRow)
}


function setEmailTemplates() {
    let beginningIndex = getIndexNumber("EMAIL_TEMPLATE_START");
    let list = data[beginningIndex];
    list = removeHeadAndTail(list, "EMAIL_TEMPLATE_START", "EMAIL_TEMPLATE_END");
    list = list.split(DELIMINATOR);
    for (let index = 0; index < list.length-1; index++) {
        let row = document.createElement("div");
        row.className = "row";
        let sno = document.createElement("div");
        sno.className = "col";
        sno.innerHTML = 0;
        let title = document.createElement("div");
        title.className = "col";
        title.innerHTML = list[index];
        ++index;
        let template = document.createElement("div");
        template.className = "col";
        template.innerHTML = list[index];
        row.appendChild(sno);
        row.appendChild(title);
        row.appendChild(template);
        document.getElementById("parentContainer").appendChild(row);
    }
}





