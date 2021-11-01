
login_form.addEventListener('submit', async(e)=>{
    e.preventDefault()
    div_alert.innerHTML = ""
    let pattern = createPattern()
    let username = user_name.value
    let url = login_form.action
    let formData = new FormData()
    formData.append('username', username)
    formData.append('pattern', pattern)

    let response = await fetch(url,{
        method: 'POST',
        body: formData
    })
    response = await response.json()

    if(response.status == true){
        window.location = 'index.php'
    }else{
        div_alert.innerHTML = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Error:</strong> ${response.error}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>`
    }
})

function createPattern(){
    let check1 = pattern1.checked ? 1 : 0
    let check2 = pattern2.checked ? 1 : 0
    let check3 = pattern3.checked ? 1 : 0
    let check4 = pattern4.checked ? 1 : 0
    let check5 = pattern5.checked ? 1 : 0
    let check6 = pattern6.checked ? 1 : 0
    let check7 = pattern7.checked ? 1 : 0
    let check8 = pattern8.checked ? 1 : 0
    let check9 = pattern9.checked ? 1 : 0
    let check10 = pattern10.checked ? 1 : 0
    let check11 = pattern11.checked ? 1 : 0
    let check12 = pattern12.checked ? 1 : 0
    let check13 = pattern13.checked ? 1 : 0
    let check14 = pattern14.checked ? 1 : 0
    let check15 = pattern15.checked ? 1 : 0
    let check16 = pattern16.checked ? 1 : 0

    return `${check1}-${check2}-${check3}-${check4}-${check5}-${check6}-${check7}-${check8}-${check9}-${check10}-${check11}-${check12}-${check13}-${check14}-${check15}-${check16}`
}
