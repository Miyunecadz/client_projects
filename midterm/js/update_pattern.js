update_pattern_form.addEventListener('submit', async(e)=>{
    e.preventDefault()
    let url = update_pattern_form.action
    let formData = new FormData(update_pattern_form)
    formData.set('pattern', createPattern())
    formData.set('confirm_pattern', createConfirmPattern())

    let response = await fetch(url,{
        method: 'POST',
        body: formData
    })
    response = await response.json()
    if(response.updated == true){
        Swal.fire({
            icon: 'success',
            title: 'Success!',
          }).then((result) => {
              if(result.isConfirmed){
                  window.location = "index.php"
              }
          })
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: response.error,
          })
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

function createConfirmPattern(){
    let check1 = confirm_pattern1.checked ? 1 : 0
    let check2 = confirm_pattern2.checked ? 1 : 0
    let check3 = confirm_pattern3.checked ? 1 : 0
    let check4 = confirm_pattern4.checked ? 1 : 0
    let check5 = confirm_pattern5.checked ? 1 : 0
    let check6 = confirm_pattern6.checked ? 1 : 0
    let check7 = confirm_pattern7.checked ? 1 : 0
    let check8 = confirm_pattern8.checked ? 1 : 0
    let check9 = confirm_pattern9.checked ? 1 : 0
    let check10 = confirm_pattern10.checked ? 1 : 0
    let check11 = confirm_pattern11.checked ? 1 : 0
    let check12 = confirm_pattern12.checked ? 1 : 0
    let check13 = confirm_pattern13.checked ? 1 : 0
    let check14 = confirm_pattern14.checked ? 1 : 0
    let check15 = confirm_pattern15.checked ? 1 : 0
    let check16 = confirm_pattern16.checked ? 1 : 0

    return `${check1}-${check2}-${check3}-${check4}-${check5}-${check6}-${check7}-${check8}-${check9}-${check10}-${check11}-${check12}-${check13}-${check14}-${check15}-${check16}`
}
