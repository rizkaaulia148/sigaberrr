<!DOCTYPE html>
<html lang="en">

<style>
    /* Custom CSS for button size */
    .custom-button {
        padding: 7px 14px;
        /* Adjust padding to change button size */
        font-size: 14px;
        /* Adjust font size to change button text size */
        width: 90px;
        /* Set the width of the button */
        margin-top: 1rem;
        /* Add margin-top to create space from the top */
        display: flex;
        /* Use flexbox to center the content */
        justify-content: center;
        /* Center the content horizontally */
        align-items: center;
        /* Center the content vertically */
        background-color: #68b92e;
        /* Set the background color to #68b92e */
        color: white;
        /* Set the text color to white */
        border: none;
        /* Remove the button border */
        border-radius: 2px;
        /* Add a small border radius */
        transition: background-color 0.3s ease;
        /* Add a smooth transition for background-color */
    }

    .custom-button:hover,
    .custom-button:focus {
        background-color: #5a9d26;
        /* Set the hover/focus background color */
    }

    .custom-button:active {
        background-color: #4c8521;
        /* Set the active background color */
    }


    .card-body {
        font-size: 1rem;
    }
</style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title" content="History" />
    <meta name="author" content="Fonnte" />
    <meta name="description" content="History" />
    <link rel="canonical" href="http://md.fonnte.com/new/history.php" />

    <!-- Sweet Alert -->
    <link type="text/css" href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />

    <!-- Notyf -->
    <link type="text/css" href="vendor/notyf/notyf.min.css" rel="stylesheet" />

    <!-- Volt CSS -->
    <link type="text/css" href="css/volt.css" rel="stylesheet" />
    <link type="text/css" href="css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/dselect/style.css">
    <script src="vendor/dselect/dselect.js"></script>
</head>

<body>
    <main class="content">
        <div class="col-lg bg-light mt-4">
            <div class="card">
                <div class="col-12 mb-4">

                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">History Message</h2>
                    </div>
                    <div class="card-body py-0">
                        <div class="accordion accordion-flush border-bottom" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed px-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        Filter
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body px-0">
                                        <form action="" method="POST" class="row">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <label for="start">Start</label>
                                                <div class="input-group w-100 flex-nowrap">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg class="icon icon-xxs ms-1" fill="currentColor"
                                                            viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z" />
                                                        </svg>
                                                    </span>
                                                    <input type="datetime-local" class="form-control" id="start"
                                                        name="start">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <label for="end">End</label>
                                                <div class="input-group w-100 flex-nowrap">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg class="icon icon-xxs ms-1" fill="currentColor"
                                                            viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z" />
                                                        </svg>
                                                    </span>
                                                    <input type="datetime-local" class="form-control" id="end"
                                                        name="end">
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-6 col-12 ">
                                                <label for="search-buttons">Status</label>
                                                <div class="input-group w-100 flex-nowrap">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg class="icon icon-xxs ms-1" fill="currentColor"
                                                            viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M24 6.278l-11.16 12.722-6.84-6 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.278zm-22.681 5.232l6.835 6.01-1.314 1.48-6.84-6 1.319-1.49zm9.278.218l5.921-6.728 1.482 1.285-5.921 6.756-1.482-1.313z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <select name="search-buttons" id="search-buttons"
                                                        class="form-select rounded-0">
                                                        <option value="all" selected>All</option>
                                                        <option value="sent">Sent</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="waiting">Waiting</option>
                                                        <option value="invalid">Invalid</option>
                                                        <option value="expired">Expired</option>
                                                        <option value="failed">Failed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <label for="target">Search for Target</label>
                                                <div class="input-group w-100 flex-nowrap">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg class="icon icon-xxs ms-1" fill="currentColor"
                                                            viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z" />
                                                        </svg>
                                                    </span>
                                                    <input type="search" class="form-control" id="target" name="target"
                                                        placeholder="input target">
                                                </div>
                                            </div>
                                            <div class="align-self-end col-md-3 col-sm-6 col-12 mt-4 mt-md-0">
                                                <button
                                                    class="btn btn-info text-white custom-button d-flex justify-content-center"
                                                    id="filter">
                                                    <span>Filter</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body overflow-auto">
                        <table id="table" class="stripe w-100">
                            <thead>
                                <tr>
                                    <th class="ps-2 py-2"></th>
                                    <th class="ps-2 py-2">Id</th>
                                    <th class="px-2 py-2">Time</th>
                                    <th class="px-2 py-2">Target</th>
                                    <th class="px-2 py-2">Contact</th>
                                    <th class="px-2 py-2">Type</th>
                                    <th class="px-2 py-2">Message</th>
                                    <th class="px-2 py-2">Url</th>
                                    <th class="px-2 py-2">Status</th>
                                    <th class="px-2 py-2">State</th>
                                    <th class="px-2 py-2 text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody id="datatable">
                                <tr>
                                    <td class="px-4 py-2 text-center" colspan="9">no message sent</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="py-4" id="pagination-wrapper">
                            <div class="mb-2"><small>Total 0 data</small></div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm mb-0">

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Reschedule -->
        <div class="modal" id="reschedule-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reschedule</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-4">
                            <div class="d-flex flex-row">
                                <div class="me-1 w-50">
                                    <label for="delay">Delay</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.91 13.34l2.636-4.026-.454-.406-3.673 3.099c-.675-.138-1.402.068-1.894.618-.736.823-.665 2.088.159 2.824.824.736 2.088.665 2.824-.159.492-.55.615-1.295.402-1.95zm-3.91-10.646v-2.694h4v2.694c-1.439-.243-2.592-.238-4 0zm8.851 2.064l1.407-1.407 1.414 1.414-1.321 1.321c-.462-.484-.964-.927-1.5-1.328zm-18.851 4.242h8v2h-8v-2zm-2 4h8v2h-8v-2zm3 4h7v2h-7v-2zm21-3c0 5.523-4.477 10-10 10-2.79 0-5.3-1.155-7.111-3h3.28c1.138.631 2.439 1 3.831 1 4.411 0 8-3.589 8-8s-3.589-8-8-8c-1.392 0-2.693.369-3.831 1h-3.28c1.811-1.845 4.321-3 7.111-3 5.523 0 10 4.477 10 10z" />
                                            </svg>
                                        </span>
                                        <input type="number" placeholder="Fonnte" class="form-control" value=5
                                            name="delay-start" id="delay-start" min=0 />
                                    </div>
                                </div>
                                <div class="ms-1 w-50"><label for="delay">To</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.91 13.34l2.636-4.026-.454-.406-3.673 3.099c-.675-.138-1.402.068-1.894.618-.736.823-.665 2.088.159 2.824.824.736 2.088.665 2.824-.159.492-.55.615-1.295.402-1.95zm-3.91-10.646v-2.694h4v2.694c-1.439-.243-2.592-.238-4 0zm8.851 2.064l1.407-1.407 1.414 1.414-1.321 1.321c-.462-.484-.964-.927-1.5-1.328zm-18.851 4.242h8v2h-8v-2zm-2 4h8v2h-8v-2zm3 4h7v2h-7v-2zm21-3c0 5.523-4.477 10-10 10-2.79 0-5.3-1.155-7.111-3h3.28c1.138.631 2.439 1 3.831 1 4.411 0 8-3.589 8-8s-3.589-8-8-8c-1.392 0-2.693.369-3.831 1h-3.28c1.811-1.845 4.321-3 7.111-3 5.523 0 10 4.477 10 10z" />
                                            </svg>
                                        </span>
                                        <input type="number" placeholder="Fonnte" class="form-control" value=0
                                            name="delay-end" id="delay-end" min=0 />
                                    </div>
                                </div>
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
                        <div class="form-group mb-4">
                            <label>By Schedule</label>
                            <div class="input-group w-100 flex-nowrap">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="byschedule"
                                        style="cursor:pointer">
                                    <label class="form-check-label" for="byschedule">No</label>
                                </div>
                            </div>
                            <small class="text-italic">Reschedule all messages which have the same schedule</small>
                        </div>
                        <div class="d-grid mt-2">
                            <button type="submit" class="btn btn-primary mb-4" name="submit-reschedule"
                                id="submit-reschedule" data-id="0">
                                <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 25 35"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z" />
                                </svg>
                                Reschedule
                            </button>
                        </div>
                    </div>
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
        liveSearch(11)
        resend()
        filterHistory()
        deleteHistory()
        downloadHistory()
        trueFalse("byschedule", "Yes", "No")
        Reschedule()
    </script>
</body>

</html>