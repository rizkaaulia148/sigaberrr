<!DOCTYPE html>
<html lang="en">

<body>
    <main class="content">
        <div class="col-lg bg-light mt-4">
            <div class="card">
                <div class="col-12 mb-4">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Send Message</h2>
                    </div>
                    <div class="card-body" id="send">
                        <form action="" method="post" class="p-4 pt-2">

                            <div class="form-group">
                                <div class="form-group mb-4">
                                    <label for="type">Select Target</label>
                                    <div class="input-group w-100 flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-4 7h-8v1h8v-1zm0 5h-8v1h8v-1zm0 5h-8v1h8v-1zm-10.516-11.304l-.71-.696-2.553 2.607-1.539-1.452-.698.71 2.25 2.135 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304z" />
                                            </svg>
                                        </span>
                                        <select name="type" id="type" class="form-select rounded-0"
                                            style="cursor:pointer">
                                            <option value="1" selected>Input</option>
                                            <option value="2">Contact</option>
                                            <option value="6">All Contacts</option>
                                            <option value="3">Group</option>
                                            <option value="4">Whatsapp Group</option>
                                            <option value="5">Import</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4 d-none">
                                    <div class="d-flex justify-content-between">
                                        <label for="whatsapp-group">Whatsapp Group</label>
                                        <small class="d-block text-end"><u style="cursor:pointer"
                                                id="update-whatsapp-group">Update List</u></small>
                                    </div>
                                    <div class="input-group w-100 flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" stroke="none"
                                                viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M.002 20h6.001c-.028-6.542 2.995-3.697 2.995-8.901 0-2.009-1.311-3.099-2.998-3.099-2.492 0-4.226 2.383-1.866 6.839.775 1.464-.825 1.812-2.545 2.209-1.49.344-1.589 1.072-1.589 2.333l.002.619zm20.498-7c-1.932 0-3.5 1.567-3.5 3.5s1.568 3.5 3.5 3.5 3.5-1.567 3.5-3.5-1.568-3.5-3.5-3.5zm1.5 4h-1v1h-1v-1h-1v-1h1v-1h1v1h1v1zm-4.814 3h-9.183l-.003-.829c0-1.679.133-2.649 2.118-3.107 2.243-.518 4.458-.981 3.394-2.945-3.156-5.82-.901-9.119 2.488-9.119 4.06 0 4.857 4.119 3.085 7.903-1.972.609-3.419 2.428-3.419 4.597 0 1.38.589 2.619 1.52 3.5z" />
                                            </svg>
                                        </span>
                                        <select name="whatsapp-group[]" id="whatsapp-group"
                                            class="form-select rounded-0" multiple style="cursor:pointer"
                                            data-dselect-search=true>
                                            <option value="0">You have no whatsapp group yet</option>
                                        </select>
                                    </div>

                                    <script>
                                        dselect(document.querySelector("#whatsapp-group"))
                                    </script>
                                </div>
                                <div class="form-group mb-4 d-none">
                                    <label for="group">Group</label>
                                    <div class="input-group w-100 flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" stroke="none"
                                                viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M.002 20h6.001c-.028-6.542 2.995-3.697 2.995-8.901 0-2.009-1.311-3.099-2.998-3.099-2.492 0-4.226 2.383-1.866 6.839.775 1.464-.825 1.812-2.545 2.209-1.49.344-1.589 1.072-1.589 2.333l.002.619zm20.498-7c-1.932 0-3.5 1.567-3.5 3.5s1.568 3.5 3.5 3.5 3.5-1.567 3.5-3.5-1.568-3.5-3.5-3.5zm1.5 4h-1v1h-1v-1h-1v-1h1v-1h1v1h1v1zm-4.814 3h-9.183l-.003-.829c0-1.679.133-2.649 2.118-3.107 2.243-.518 4.458-.981 3.394-2.945-3.156-5.82-.901-9.119 2.488-9.119 4.06 0 4.857 4.119 3.085 7.903-1.972.609-3.419 2.428-3.419 4.597 0 1.38.589 2.619 1.52 3.5z" />
                                            </svg>
                                        </span>
                                        <select name="group[]" id="group" class="form-select rounded-0" multiple
                                            style="cursor:pointer" data-dselect-search=true>
                                            <option value="0">You have no group</option>
                                        </select>
                                    </div>

                                    <script>
                                        dselect(document.querySelector("#group"))
                                    </script>
                                </div>
                                <div class="form-group mb-4 d-none">
                                    <label for="contact">Contact</label>
                                    <div class="input-group w-100 flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" stroke="none"
                                                viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.5 2c.276 0 .5.224.5.5v19c0 .276-.224.5-.5.5h-11c-.276 0-.5-.224-.5-.5v-19c0-.276.224-.5.5-.5h11zm2.5 0c0-1.104-.896-2-2-2h-12c-1.104 0-2 .896-2 2v20c0 1.104.896 2 2 2h12c1.104 0 2-.896 2-2v-20zm-9.5 1h3c.276 0 .5.224.5.501 0 .275-.224.499-.5.499h-3c-.275 0-.5-.224-.5-.499 0-.277.225-.501.5-.501zm1.5 18c-.553 0-1-.448-1-1s.447-1 1-1c.552 0 .999.448.999 1s-.447 1-.999 1zm5-3h-10v-13h10v13z">
                                                </path>
                                            </svg>
                                        </span>
                                        <select name="contact[]" id="contact" class="form-select rounded-0" multiple
                                            style="cursor:pointer" data-dselect-search=true>
                                            <option value="0">You have no contact</option>
                                        </select>
                                    </div>

                                    <script>
                                        dselect(document.querySelector("#contact"))
                                        document.getElementById("contact").nextElementSibling.id = "ajax-search"
                                    </script>
                                </div>

                                <div class="form-group mb-4 d-none">
                                    <div class="d-flex justify-content-between">
                                        <label for="import">Import</label>
                                        <a href="./assets/contacts-example.csv"><u>Example</u></a>
                                    </div>
                                    <div class="input-group w-100 flex-nowrap">
                                        <input type="file" class="form-control" id="import" name="import">
                                    </div>
                                </div>

                                <script>
                                    dselect(document.querySelector("#countrycode"))
                                </script>
                            </div>

                            <script>
                                document.querySelector("#countrycode option").removeAttribute("selected")
                                document.querySelector("#countrycode").nextElementSibling.querySelectorAll(".dselect-items button").forEach((e) => {
                                    if (e.getAttribute("data-dselect-value") == 62) {
                                        dselectUpdate(e, 'dselect-wrapper', 'form-select')
                                    }
                                })
                            </script>
                            <div class="form-group mb-4">
                                <label for="type-file">File Source</label>

                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-4 7h-8v1h8v-1zm0 5h-8v1h8v-1zm0 5h-8v1h8v-1zm-10.516-11.304l-.71-.696-2.553 2.607-1.539-1.452-.698.71 2.25 2.135 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304z" />
                                        </svg>
                                    </span>
                                    <select name="type-file" id="type-file" class="form-select rounded-0"
                                        style="cursor:pointer">
                                        <option value="1" selected>Input</option>
                                        <option value="2">ImakePDF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 d-none">
                                <label for="imakepdf">ImakePDF</label>

                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-4 7h-8v1h8v-1zm0 5h-8v1h8v-1zm0 5h-8v1h8v-1zm-10.516-11.304l-.71-.696-2.553 2.607-1.539-1.452-.698.71 2.25 2.135 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304z" />
                                        </svg>
                                    </span>
                                    <select name="imakepdf" id="imakepdf" class="form-select rounded-0"
                                        style="cursor:pointer">
                                        <option value="0">No template yet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="d-flex justify-content-between"><label for="file">File</label><br>
                                    <small class="d-block text-end"><u style="cursor:pointer"
                                            id=fileinfo>Limitation</u></small>
                                </div>
                                <input class="form-control" type="file" id="file">
                            </div>
                            <div class="form-group mb-4">
                                <label for="type-schedule">Type Schedule</label>

                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-4 7h-8v1h8v-1zm0 5h-8v1h8v-1zm0 5h-8v1h8v-1zm-10.516-11.304l-.71-.696-2.553 2.607-1.539-1.452-.698.71 2.25 2.135 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304z" />
                                        </svg>
                                    </span>
                                    <select name="type-schedule" id="type-schedule" class="form-select rounded-0"
                                        style="cursor:pointer">
                                        <option value="1" selected>Schedule</option>
                                        <option value="2">Split</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="schedule">Schedule</label>
                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z" />
                                        </svg>
                                    </span>
                                    <input type="datetime-local" class="form-control" id="schedule" name="schedule">
                                </div>
                            </div>
                            <div class="form-group mb-4 d-none">
                                <label for="split">Split</label>
                                <div class="border p-4">
                                    <div id="split">
                                        <div class="d-flex my-2 split-fields" id="split-fields">
                                            <div class="d-flex flex-column w-50">
                                                <label for="split-targets">Targets</label>
                                                <div class="input-group w-100 flex-nowrap me-2">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg class="icon icon-xxs ms-1" fill="currentColor"
                                                            viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M22 3v13h-11.643l-4.357 3.105v-3.105h-4v-13h20zm2-2h-24v16.981h4v5.019l7-5.019h13v-16.981zm-5 6h-14v-1h14v1zm0 2h-14v1h14v-1zm-6 3h-8v1h8v-1z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <input type="number" class="form-control split-targets" min=1
                                                        value=1>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column w-50">
                                                <label for="split-schedule" class="ms-2">Start</label>
                                                <div class="input-group w-100 flex-nowrap ms-2">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg class="icon icon-xxs ms-1" fill="currentColor"
                                                            viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z" />
                                                        </svg>
                                                    </span>
                                                    <input type="datetime-local" class="form-control split-schedule">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary my-4" name="add-split" id="add-split">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 25 35"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path>
                                            </svg>
                                            Add
                                        </button>
                                    </div>
                                </div>
                                <small class="text-italic">Used to split large number of targets</small>
                            </div>


                            <div class="form-group mb-4">
                                <label for="type-message">Message Source</label>

                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-4 7h-8v1h8v-1zm0 5h-8v1h8v-1zm0 5h-8v1h8v-1zm-10.516-11.304l-.71-.696-2.553 2.607-1.539-1.452-.698.71 2.25 2.135 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304z" />
                                        </svg>
                                    </span>
                                    <select name="type-message" id="type-message" class="form-select rounded-0"
                                        style="cursor:pointer">
                                        <option value="1" selected>Input</option>
                                        <option value="2">Template</option>
                                        <option value="3">Button</option>
                                        <option value="4">Poll</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-4 d-none">
                                <label for="template">Select Template</label>

                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-4 7h-8v1h8v-1zm0 5h-8v1h8v-1zm0 5h-8v1h8v-1zm-10.516-11.304l-.71-.696-2.553 2.607-1.539-1.452-.698.71 2.25 2.135 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304z" />
                                        </svg>
                                    </span>
                                    <select name="template" id="template" class="form-select rounded-0"
                                        style="cursor:pointer">
                                        <option>no template yet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 d-none">
                                <label for="button">Select Button</label>

                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 2v20h-20v-20h20zm2-2h-24v24h24v-24zm-4 7h-8v1h8v-1zm0 5h-8v1h8v-1zm0 5h-8v1h8v-1zm-10.516-11.304l-.71-.696-2.553 2.607-1.539-1.452-.698.71 2.25 2.135 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304zm0 5l-.71-.696-2.552 2.607-1.539-1.452-.698.709 2.249 2.136 3.25-3.304z" />
                                        </svg>
                                    </span>
                                    <select name="button" id="button" class="form-select rounded-0"
                                        style="cursor:pointer">
                                        <option>no button yet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 d-none">
                                <label for="poll">Poll</label>
                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 3v13h-11.643l-4.357 3.105v-3.105h-4v-13h20zm2-2h-24v16.981h4v5.019l7-5.019h13v-16.981zm-5 6h-14v-1h14v1zm0 2h-14v1h14v-1zm-6 3h-8v1h8v-1z">
                                            </path>
                                        </svg>
                                    </span>
                                    <select name="poll" id="poll" class="form-select rounded-0" style="cursor:pointer">
                                        <option value="0">no poll yet</option>"
                                    </select>
                                </div>
                            </div>
                            <div class=" form-group mb-4">
                                <label for="message">Message</label>

                                <div class="input-group w-100 flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xxs ms-1" fill="currentColor" viewBox="0 0 25 25"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22 3v13h-11.643l-4.357 3.105v-3.105h-4v-13h20zm2-2h-24v16.981h4v5.019l7-5.019h13v-16.981zm-5 6h-14v-1h14v1zm0 2h-14v1h14v-1zm-6 3h-8v1h8v-1z" />
                                        </svg>
                                    </span>
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="10"
                                        placeholder="Write your message"></textarea>
                                </div>
                                <small class="text-italic">Usable variable : {name}, {var1},
                                    {var2},...</small>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="typing">Typing</label>
                        <div class="input-group w-100 flex-nowrap">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="typing" style="cursor:pointer">
                                <label class="form-check-label" for="typing">Off</label>
                            </div>
                        </div>
                        <small class="text-italic">Set to on if you want to simulate typing</small>
                    </div>
                    <div class="d-grid mt-2">
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Core -->
    <script src="vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Smooth scroll -->
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Notyf -->
    <script src="vendor/notyf/notyf.min.js"></script>

    <!-- Volt JS -->
    <script src="assets/js/volt.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/domain.js"></script>
    <script src="assets/js/all.js"></script>
    <script src="assets/js/delete.js"></script>
    <script>
        send()
        fileLimitation()
        schedule("send", "target")
        trueFalse("typing", "On", "Off")
        youtube()
        ajaxContact("/ajax-contact", "ajax-search", "contact")
    </script>
</body>

</html>