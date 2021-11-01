
update_form.addEventListener('submit', async(e)=>{
    e.preventDefault()
    let url = update_form.action
    let formData = new FormData(update_form)
    formData.set('gender', setGender())

    let response = await fetch(url,{
        method: 'POST',
        body: formData
    })
    response = await response.json()
    console.log(response)
    if(response.updated == true){
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "Successfully updated",
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

function setGender(){
    return gender_male.checked ? 'male' : gender_female.checked ? 'female' : ''
}
