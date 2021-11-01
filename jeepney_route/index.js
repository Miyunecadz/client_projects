function separateStringByComma(value){
    return value.split(",");
}

function removeSpacesInEachData(value){
    let newValue =[]
    for(let data of value){
        newValue.push(data.trim())
    }
    return newValue
}

const destinations = [
    'Alpha',
    'Bravo',
    'Charlie',
    'Delta',
    'Echo',
    'Foxtot',
    'Golf',
    'Hotel',
    'India',
    'Juliet',
    'Kilo',
    'Lima',
    'Mike',
    'November',
    'Oscar',
    'Papa',
    'Quebec',
    'Romeo'
]

function setDestination(...values){
    let newDestrination = []
    for(let value of values){
        newDestrination.push(destinations[value])
    }
    return newDestrination
}

const jeepney_route = {
    '01A': setDestination(0,1,2,4,6),
    '02B': setDestination(0,2,3,5,6),
    '03C': setDestination(2,3,5,7,8),
    '04A': setDestination(2,3,4,5,6),
    '04D': setDestination(2,4,5,6,8),
    '06B': setDestination(3,7,9,10,11),
    '06D': setDestination(3,5,6,8,10),
    '10C': setDestination(5,6,7,8,9),
    '10H': setDestination(5,7,9,11,13),
    '11A': setDestination(5,6,10,12,13),
    '11B': setDestination(5,6,11,14,15),
    '20A': setDestination(8,9,13,15,17),
    '20C': setDestination(8,10,11,12,17),
    '42C': setDestination(9,10,11,12,14),
    '42D': setDestination(9,13,14,16,17),
}

function messageConstruct(key, message, status){
    return {'jeepney': key, 'routes': message, 'status': status}
}

function getRoute(values){
    let dataReturn = []
    let keys = Object.keys(jeepney_route)
    for(let value of values){
        if(keys.includes(value)){
            dataReturn.push(messageConstruct(value, jeepney_route[value], true))
        }else{
            dataReturn.push(messageConstruct(value, `Invalid Jeepney Route: ${value}`, false))
        }
    }
    return dataReturn
}

myform.addEventListener('submit', (e)=>{
    e.preventDefault()
    table_body.innerHTML = ''
    let incomingData = myform.name.value

    if(!incomingData){
        Swal.fire(
            'Something went wrong',
            'Please enter some jeepney name',
            'error'
          )
    }else{
        let separatedData = separateStringByComma(incomingData)
        let trimedData = removeSpacesInEachData(separatedData)

        let data = getRoute(trimedData)
        let tableDatas = ''
        for(let count = 0 ; count < data.length; count++){
            if(data[count].status){
                tableDatas += `<tr> <td> ${data[count].jeepney} </td> <td> ${data[count].routes} </td> </tr>`
            }else{
                tableDatas += `<tr class='table-danger'> <td> ${data[count].jeepney} </td> <td> ${data[count].routes} </td> </tr>`
            }
        }    

        table_body.innerHTML = tableDatas

        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {backdrop: true})
        myModal.show()
    }
})









