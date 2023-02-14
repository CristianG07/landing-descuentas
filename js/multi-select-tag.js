
function MultiSelectTag (el, customs = {shadow: false, rounded:true}) {
    var element = null
    var options = null
    var customSelectContainer = null
    var wrapper = null
    var btnContainer = null
    var body = null
    var inputContainer = null
    var inputBody = null
    var input = null
    var button = null
    var drawer = null
    var ul = null
    var domParser = new DOMParser()
    init()

    function init() {
        element = document.getElementById(el)
        createElements()
        initOptions()
        enableItemSelection()
        setValues()

        button.addEventListener('click', () => {
            if(drawer.classList.contains('hidden')) {
                initOptions()
                enableItemSelection()
                drawer.classList.remove('hidden')
                input.focus()
            }
        })

        input.addEventListener('keyup', (e) => {
                initOptions(e.target.value)
                enableItemSelection()
        })

        input.addEventListener('keydown', (e) => {
            if(e.key === 'Backspace' && !e.target.value && inputContainer.childElementCount > 1) {
                const child = body.children[inputContainer.childElementCount - 2].firstChild
                const option = options.find((op) => op.value == child.dataset.value)
                option.selected = false
                removeTag(child.dataset.value)
                setValues()
            }
            
        })
        
        window.addEventListener('click', (e) => {   
            if (!customSelectContainer.contains(e.target)){
                drawer.classList.add('hidden')
            }
        });

    }

    function createElements() {
        // Create custom elements
        options = getOptions();
        element.classList.add('hidden')
        
        // .multi-select-tag
        customSelectContainer = document.createElement('div')
        customSelectContainer.classList.add('mult-select-tag')

        // .container
        wrapper = document.createElement('div')
        
        wrapper.classList.add('wrapper')

        // body
        body = document.createElement('div')
        body.classList.add('body')
        if(customs.shadow) {
            body.classList.add('shadow')
        }
        if(customs.rounded) {
            body.classList.add('rounded')
        }
        
        // .input-container
        inputContainer = document.createElement('div')
        inputContainer.classList.add('input-container')

        // input
        input = document.createElement('input')
        

        inputBody = document.createElement('inputBody')
        
        body.append(inputContainer)

        // .btn-container
        btnContainer = document.createElement('div')
        btnContainer.classList.add('btn-container')

        // button
        button = document.createElement('button')
        button.type = 'button'
        btnContainer.append(button)

        const icon = domParser.parseFromString(`<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 21 6 15"></polyline></svg>`, 'image/svg+xml').documentElement
        button.append(icon)


        body.append(btnContainer)
        wrapper.append(body)

        drawer = document.createElement('div');
        drawer.classList.add(...['drawer', 'hidden'])
        if(customs.shadow) {
            drawer.classList.add('shadow')
        }
        if(customs.rounded) {
            drawer.classList.add('rounded')
        }
        drawer.append(inputBody)
        ul = document.createElement('ul');
        
        drawer.appendChild(ul)
    
        customSelectContainer.appendChild(wrapper)
        customSelectContainer.appendChild(drawer)

        // Place TailwindTagSelection after the element
        if (element.nextSibling) {
            element.parentNode.insertBefore(customSelectContainer, element.nextSibling)
        }
        else {
            element.parentNode.appendChild(customSelectContainer);
        }
    }

    function initOptions(val = null) {
        ul.innerHTML = ''
        for (var option of options) {
            if (option.selected) {
                !isTagSelected(option.value) && createTag(option)
            }
            else {
                const li = document.createElement('li')
                li.innerHTML = option.label
                li.dataset.value = option.value
                
                // For search
                if(val && option.label.toLowerCase().startsWith(val.toLowerCase())) {
                    ul.appendChild(li)
                }
                else if(!val) {
                    ul.appendChild(li)
                }
            }
        }

    }

    function createTag(option) {
        // Create and show selected item as tag
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('item-container');
        const itemLabel = document.createElement('div');
        itemLabel.classList.add('item-label');
        itemLabel.innerHTML = option.label
        itemLabel.dataset.value = option.value 
        const itemClose = new DOMParser().parseFromString(`<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="item-close-svg">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>`, 'image/svg+xml').documentElement
 
        itemClose.addEventListener('click', (e) => {
            const unselectOption = options.find((op) => op.value == option.value)
            unselectOption.selected = false
            removeTag(option.value)
            initOptions()
            setValues()
        })
    
        itemDiv.appendChild(itemLabel)
        itemDiv.appendChild(itemClose)
        inputContainer.append(itemDiv)
    }

    function enableItemSelection() {
        // Add click listener to the list items
        for(var li of ul.children) {
            li.addEventListener('click', (e) => {
                options.find((o) => o.value == e.target.dataset.value).selected = true
                ul_hidden(e.target.dataset.value)
                input.value = null
                initOptions()
                setValues()
                input.focus()
            })
        }
    }

    function isTagSelected(val) {
        // If the item is already selected
        for(var child of inputContainer.children) {
            if(!child.classList.contains('input-body') && child.firstChild.dataset.value == val) {
                return true
            }
        }

        return false
    }

    function removeTag(val) {
        // Remove selected item
        for(var child of inputContainer.children) {
            if(!child.classList.contains('input-body') && child.firstChild.dataset.value == val) {
                inputContainer.removeChild(child)
                const item_closed = child.firstChild.dataset.value;
                ul_show(item_closed);
            }
        }
    }

    function setValues() {
        // Update element final values
        for(var i = 0; i < options.length; i++) {
            element.options[i].selected = options[i].selected
        }
     
    }

    function getOptions() {
        // Map element options
        return [...element.options].map((op) => {
            return {
                value: op.value,
                label: op.label,
                selected: op.selected,
            }
        })
    }

    ul_hidden = (e) => {
        const option1 = document.querySelectorAll('ul')[2];
        const option2 = document.querySelectorAll('ul')[6];
        const option3 = document.querySelectorAll('ul')[7];
        const option4 = document.querySelectorAll('ul')[8];
        const option5 = document.querySelectorAll('ul')[4];
        const option6 = document.querySelectorAll('ul')[5];

        
        if (e == 'sitio web' || e == 'aplicación movil' || e == 'extensión de chrome para la computadora' || e == 'consultas de descuento via whatsapp') {
            option1.classList.add('hidden');
        }

        if (e == 'No compro online' || e == '1 o 2 veces por año' || e == 'Cada 2 o 3 meses' || e == '1 o 2 veces al mes' || e == '3 a 5 veces al mes' || e == 'más de 5 veces al mes') {
            option5.classList.add('hidden');
        }
        
        for($i = 2023; $i >= 1940; $i--) {
            if (e == $i) {
                option6.classList.add('hidden');
            }
        }
        
        if (e == 'Si' || e == 'No') {
            option2.classList.add('hidden');
        }

        if (e == 'si' || e == 'no') {
            option4.classList.add('hidden');
        }
        
        if (e == 'NO' || e == 'Poco' || e == 'De vez en cuando' || e == 'Frecuentemente') {
            option3.classList.add('hidden');
        }
    }

    ul_show = (e) => {
        const option1 = document.querySelectorAll('ul')[2];
        const option2 = document.querySelectorAll('ul')[6];
        const option3 = document.querySelectorAll('ul')[7];
        const option4 = document.querySelectorAll('ul')[8];
        const option5 = document.querySelectorAll('ul')[4];
        const option6 = document.querySelectorAll('ul')[5];
        
        if (e == 'sitio web' || e == 'aplicación movil' || e == 'extensión de chrome para la computadora' || e == 'consultas de descuento via whatsapp') {
            option1.classList.remove('hidden');
        }

        if (e == 'NO' || e == 'Poco' || e == 'De vez en cuando' || e == 'Frecuentemente') {
            option3.classList.remove('hidden');
        }

        if (e == 'No compro online' || e == '1 o 2 veces por año' || e == 'Cada 2 o 3 meses' || e == '1 o 2 veces al mes' || e == '3 a 5 veces al mes' || e == 'más de 5 veces al mes') {
            option5.classList.remove('hidden');
        }

        for($i = 2023; $i >= 1940; $i--) {
            if (e == $i) {
                option6.classList.remove('hidden');
            }
        }

        if (e == 'Si' || e == 'No') {
            option2.classList.remove('hidden');
        }

        if (e == 'si' || e == 'no') {
            option4.classList.remove('hidden');
        }
    }
}