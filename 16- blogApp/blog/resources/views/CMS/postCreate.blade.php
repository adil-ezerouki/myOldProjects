<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Text Editor</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ddd;
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        li {
            margin-left: 16px;
        }

        a {
            cursor: pointer;
        }




        .container {
            width: 100%;
            background: #fff;
            border-radius: 8px;
            height: 1000px;
        }
        .toolbar {
            padding: 16px;
            background: #eee;
            display: flex;
            justify-content: center;

        }

        .toolbar .head {
            display: flex;
            grid-gap: 10px;
            margin-bottom: 16px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .toolbar .head > input {
            max-width: 100px;
            padding: 6px 10px;
            border-radius: 6px;
            border: 2px solid #ddd;
            outline: none;
        }
        .toolbar .head select {
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 6px;
            outline: none;
            cursor: pointer;
        }
        .toolbar .head .color {
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 6px;
            outline: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            grid-gap: 6px;
            padding: 0 10px;
        }
        .toolbar .head .color span {
            font-size: 14px;
        }
        .toolbar .head .color input {
            border: none;
            padding: 0;
            width: 26px;
            height: 26px;
            background: #fff;
            cursor: pointer;
        }
        .toolbar .head .color input::-moz-color-swatch {
            width: 20px;
            height: 20px;
            border: none;
            border-radius: 50%;
        }
        .toolbar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            grid-gap: 10px;
        }
        .toolbar  button {
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 6px;
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        .toolbar  button:hover {
            background: #f3f3f3;
        }
        #content {
            padding: 16px;
            outline: none;
            overflow: auto;
        }
        #show-code[data-active="true"] {
            background: #eee;
        }

        img {
            max-width: 500px;
        }

        #websiteLogo,#profilePic {
            width: 70px;
        }

        #profilePic {
            width: 70px;
            border-radius: 50%;
        }
        .profilePicDiv {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        #test {
            height: 1000px;
        }
    </style>
</head>
<body>

<form action="{{route('author.posts.store',$authorId)}}" method="post" enctype="multipart/form-data">
    @csrf

<div class="container">
    <div class="toolbar">
        <div class="flexDiv">
            <div class="profilePicDiv">
                <img id="websiteLogo" src="/images/icon.png">
                <img id="profilePic" src="{{asset('storage/images/user/'.$profilePic)}}" >
{{--                    <button type="submit">save</button>--}}
                <button type="submit" name="action" value="save">save</button>
            </div>
        <div class="head">
{{--            <input type="text" placeholder="Filename" value="untitled" id="filename">--}}
{{--            <select onchange="fileHandle(this.value); this.selectedIndex=0">--}}
{{--                <option value="" selected="" hidden="" disabled="">File</option>--}}
{{--                <option value="new">New file</option>--}}
{{--                <option value="txt">Save as txt</option>--}}
{{--                <option value="pdf">Save as pdf</option>--}}
{{--            </select>--}}
            <select onchange="formatDoc('formatBlock', this.value); this.selectedIndex=0;">
                <option value="" selected="" hidden="" disabled="">Format</option>
                <option value="h1">Heading 1</option>
                <option value="h2">Heading 2</option>
                <option value="h3">Heading 3</option>
                <option value="h4">Heading 4</option>
                <option value="h5">Heading 5</option>
                <option value="h6">Heading 6</option>
                <option value="p">Paragraph</option>
            </select>
            <select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
                <option value="" selected="" hidden="" disabled="">Font size</option>
                <option value="1">Extra small</option>
                <option value="2">Small</option>
                <option value="3">Regular</option>
                <option value="4">Medium</option>
                <option value="5">Large</option>
                <option value="6">Extra Large</option>
                <option value="7">Big</option>
            </select>
            <div class="color">
                <span>Color</span>
                <input type="color" oninput="formatDoc('foreColor', this.value); this.value='#000000';">
            </div>
            <div class="color">
                <span>Background</span>
                <input type="color" oninput="formatDoc('hiliteColor', this.value); this.value='#000000';">
            </div>


            <button type="button" onclick="formatDoc('undo')"><i class='bx bx-undo' ></i></button>
            <button type="button" onclick="formatDoc('redo')"><i class='bx bx-redo' ></i></button>
            <button type="button" onclick="formatDoc('bold')"><i class='bx bx-bold'></i></button>
            <button type="button" onclick="formatDoc('underline')"><i class='bx bx-underline' ></i></button>
            <button type="button" onclick="formatDoc('italic')"><i class='bx bx-italic' ></i></button>
            <button type="button" onclick="formatDoc('strikeThrough')"><i class='bx bx-strikethrough' ></i></button>
            <button type="button" onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left' ></i></button>
            <button type="button" onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle' ></i></button>
            <button type="button" onclick="formatDoc('justifyRight')"><i class='bx bx-align-right' ></i></button>
            <button type="button" onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify' ></i></button>
            <button type="button" onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol' ></i></button>
            <button type="button" onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul' ></i></button>
            <button type="button" onclick="addLink()"><i class='bx bx-link' ></i></button>
            <button type="button" onclick="addImage()"><i class='bx bx-image' ></i></button>
            <button type="button" onclick="formatDoc('unlink')"><i class='bx bx-unlink' ></i></button>
            <button type="button" id="show-code" data-active="false">&lt;/&gt;</button>
        </div>
        </div>
    </div>
    <div name='postContent'id="content" contenteditable="true" spellcheck="false">
        Lorem, ipsum.
    </div>
    <input type="hidden" name="content">
</div>

    <select name="gategories">
        @foreach($gategories as $gategory)
            <option>{{$gategory->name}}</option>
        @endforeach
    </select>

    <input type="file" name="thumbnail">
    <button type="submit" name="action" value="post">post</button>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function formatDoc(cmd, value=null) {
        if(value) {
            document.execCommand(cmd, false, value);
        } else {
            document.execCommand(cmd);
        }
    }

    function addLink() {
        const url = prompt('Insert url');
        formatDoc('createLink', url);
    }

    function addImage() {
        const url = prompt('Insert url');
        formatDoc('insertImage', url);
    }




    const content = document.getElementById('content');

    content.addEventListener('mouseenter', function () {
        const a = content.querySelectorAll('a');
        a.forEach(item=> {
            item.addEventListener('mouseenter', function () {
                content.setAttribute('contenteditable', false);
                item.target = '_blank';
            })
            item.addEventListener('mouseleave', function () {
                content.setAttribute('contenteditable', true);
            })
        })
    })


    const showCode = document.getElementById('show-code');
    let active = false;

    showCode.addEventListener('click', function () {
        showCode.dataset.active = !active;
        active = !active
        if(active) {
            content.textContent = content.innerHTML;
            content.setAttribute('contenteditable', false);
        } else {
            content.innerHTML = content.textContent;
            content.setAttribute('contenteditable', true);
        }
    })

    var contentDiv = document.getElementById("content");

    // add a submit event listener to the form
    document.querySelector("form").addEventListener("submit", function() {
        // update the value of the hidden input field with the content of the editable div
        document.querySelector("input[name='content']").value = contentDiv.innerHTML;
    });



    // const filename = document.getElementById('filename');
    //
    // function fileHandle(value) {
    //     if(value === 'new') {
    //         content.innerHTML = '';
    //         filename.value = 'untitled';
    //     } else if(value === 'txt') {
    //         const blob = new Blob([content.innerText])
    //         const url = URL.createObjectURL(blob)
    //         const link = document.createElement('a');
    //         link.href = url;
    //         link.download = `${filename.value}.txt`;
    //         link.click();
    //     } else if(value === 'pdf') {
    //         html2pdf(content).save(filename.value);
    //     }
    // }
</script>
</body>
</html>
