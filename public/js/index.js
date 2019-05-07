const input = document.querySelector('input[type="file"]')
function handleFiles (files) {
  console.log(files)
  const reader = new FileReader()
  reader.onload = function () {
    // const lines = reader.result.split('\n').map(function (line) {
    //   return line.split(',')
    // })
    // console.log(lines)
    const img = new Image()
    
    img.src = reader.result
    //document.body.appendChild(img)
  }
  //reader.readAsText(files[0])
  reader.readAsDataURL(files[0])
}

input.addEventListener('change', function (e) {
  handleFiles(input.files)
}, false)

document.addEventListener('dragover', function (e) {
  e.preventDefault()
  e.stopPropagation()
}, false)
document.addEventListener('drop', function (e) {
  e.preventDefault()
  e.stopPropagation()
  handleFiles(e.dataTransfer.files)
  
}, false)