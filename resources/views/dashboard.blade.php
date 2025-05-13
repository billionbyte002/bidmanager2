@extends('layout.app')

@section('style')
    <style>
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: orange;
        }

        .project-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .bid-buttons button {
            margin: 7px 0px 5px 5px;
            width: 13rem;
        }

        .project-details {
            margin: 5px 0;
            font-size: 0.9em;
            color: #555;
        }

        .project-bid-info,
        .project-owner-info {
            display: flex;
            align-items: center;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .project-budget {
            font-size: 1.1em;
            font-weight: bold;
            margin-top: 10px;
        }

        .project-time {
            display: flex;
            align-items: center;
            font-size: 0.9em;
            color: #080000;
            margin-right: 10px;
        }

        .input-field {
            flex-direction: row-reverse;
            min-width: 200px;
        }

        input {
            width: 225px;
        }

        .heading {
            font-size: 1.2em;
            font-weight: bolder;
        }

        .flag-icon {
            width: 20px;
            height: 12px;
            margin-right: 8px;
            margin-left: 5px;
        }

        .padding-class {
            padding-right: 15px;
        }

        .price-input {
            width: 7rem;
            padding-left: 4px;
        }

        .price-text {
            color: #080000;
            font-weight: 500;
        }

        .modal-header {
            background-color: rgb(217, 222, 231);
        }

        .modal-footer {}

        .modal-footer2 {
            display: flex;
            justify-content: space-between;
            margin: 0.5rem 1rem 0.5rem 1rem;
        }

        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            z-index: 1000;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection

@section('main_content')
    <!-- Main Content -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <br>
                <br>
                <button class="btn btn-warning mb-3" id="refreshBtn">Refresh Projects</button>
                <div id="newProjectsAlert" class="alert alert-info" style="display:none; cursor:pointer;"></div>

                <!-- Dynamic Projects Container -->
                <div id="projectsContainer">
                    <!-- Projects will be dynamically inserted here -->
                </div>
                <div class="modal fade" id="customizeModal" tabindex="-1" aria-labelledby="customizeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="customizeModalLabel">Customize Your Bid</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- Add your form fields here -->
                                <div class="mb-3">
                                    <textarea class="form-control" id="input-customize" rows="10" required></textarea>
                                </div>

                                <!-- Add more fields as needed -->
                            </div>
                            <div class="modal-footer" id="model-footer1"
                                style="justify-content: flex-start; padding: 1rem;">
                                <h5 class="mb-0 modal-budget-string" style="color: #1f2836;"></h5>
                            </div>

                            <div class="modal-footer2 d-flex justify-content-between">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" id="submitBid">Place Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let freelancerAccessToken = "{{ session('freelancer_access_token') }}";
        let projectApiUrl = @json($projectApiUrl);
        let freelancerApiBaseUrl = @json($freelancerApiBaseUrl);
        // //  console.log("freelancer Api BaseUrl is:", freelancerApiBaseUrl);

        // console.log("Token:", freelancerAccessToken);
        // console.log("Project API URL:", projectApiUrl);

        async function fetchProjects(isInitialLoad = false) {
            await loadCountryCodes();

            try {
                const response = await fetch(projectApiUrl, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + freelancerAccessToken,
                    }
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }

                const data = await response.json();
                const projects = data.result?.projects || [];
                console.log(isInitialLoad);

                // if (isInitialLoad) {
                //     checkForNewProjects(projects);
                //     // renderProjects();
                // } else {
                //     checkForNewProjects(projects);
                // }

                // Update the last project count
                lastProjectCount = projects.length;

                // Clear the projects container
                const projectsContainer = document.getElementById('projectsContainer');
                projectsContainer.innerHTML = '';

                if (projects.length > 0) {
                    currentProjects = projects;
                    for (const project of projects) {
                        const projectDiv = document.createElement('div');
                        projectDiv.classList.add('project-card');
                        const rowDiv = document.createElement('div');
                        rowDiv.classList.add('row');
                        const col6Div = document.createElement('div');
                        col6Div.classList.add('col-md-7');
                        const col2Div = document.createElement('div');
                        col2Div.classList.add('col-md-2');
                        col2Div.style.marginTop = '-15px';
                        const col3Div = document.createElement('div');
                        col3Div.classList.add('col-md-3', 'text-end', 'padding-class');

                        // Title
                        const title = document.createElement('h4');
                        const strongTitle = document.createElement('strong');
                        strongTitle.textContent = project.title || "No title available";
                        title.appendChild(strongTitle);

                        // Description
                        const descriptionWrapper = document.createElement('div');
                        const previewDescription = document.createElement('p');
                        const fullDescription = document.createElement('p');
                        const readMoreLink = document.createElement('a');
                        previewDescription.textContent = project.preview_description || "No preview available";
                        previewDescription.classList.add('project-details');
                        fullDescription.textContent = project.description || "No description available";
                        fullDescription.classList.add('project-details');
                        fullDescription.style.display = 'none';
                        readMoreLink.textContent = 'Read more';
                        readMoreLink.href = '#';
                        readMoreLink.style.color = 'blue';
                        readMoreLink.style.cursor = 'pointer';
                        readMoreLink.onclick = function() {
                            if (fullDescription.style.display === 'none') {
                                fullDescription.style.display = 'block';
                                previewDescription.style.display = 'none';
                                readMoreLink.textContent = 'Show less';
                            } else {
                                fullDescription.style.display = 'none';
                                previewDescription.style.display = 'block';
                                readMoreLink.textContent = 'Read more';
                            }
                            return false;
                        };

                        // Time Posted & Bid Info
                        const smallInfo = document.createElement('small');
                        smallInfo.classList.add('text-muted');

                        // Time Icon
                        const timeIcon = document.createElement('span');
                        timeIcon.textContent = '⏳';

                        // Bold Text for Bid Info
                        const strongText = document.createElement('strong');
                        strongText.classList.add("heading");
                        const timeAgo = getTimeSincePosted(project.submitdate);
                        const bidCount = project.bid_stats?.bid_count || 'N/A';
                        const bidAvg = project.bid_stats?.bid_avg ? project.bid_stats.bid_avg.toFixed(2) : 'N/A';
                        const currencySign = project.currency?.sign || '';
                        strongText.textContent = ` ${timeAgo} ago — ${bidCount} bids — Avg: ${currencySign}${bidAvg}`;

                        // Append time and bid info
                        smallInfo.appendChild(timeIcon);
                        smallInfo.appendChild(strongText);

                        // Skills
                        const skillsDiv = document.createElement('div');
                        skillsDiv.classList.add('mt-2');
                        if (project.jobs && project.jobs.length > 0) {
                            project.jobs.forEach(skill => {
                                const badge = document.createElement('span');
                                badge.classList.add('badge', 'bg-primary', 'me-1');
                                badge.textContent = skill.name || "Unknown skill";
                                skillsDiv.appendChild(badge);
                            });
                        }

                        const newDiv = document.createElement('div');
                        newDiv.classList.add('new-info');
                        // newDiv.textContent = 'This is a new div added after the skills section.';
                        try {
                            const response = await fetch(`${freelancerApiBaseUrl}/users/0.1/users/${encodeURIComponent(project.owner_id)}`, {
                                    method: 'GET',
                                    headers: {
                                        'Authorization': 'Bearer ' + freelancerAccessToken,
                                    }
                                });
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }

                            // Parse the JSON response
                            const verificationDetails = await response.json();

                            // Access the desired data
                            const isPaymentVerified = verificationDetails.result.status.payment_verified;
                            const isDepositVerified = verificationDetails.result.status.deposit_verified;
                            const isIdentityVerified = verificationDetails.result.status.identity_verified;
                            const isEmailVerified = verificationDetails.result.status.email_verified;
                            if (isPaymentVerified) {
                                payment = 'on';
                            }
                            if (isDepositVerified) {
                                deposit = 'on';
                            }
                            if (isIdentityVerified) {
                                identity = 'on';
                            }
                            if (isEmailVerified) {
                                email = 'on';
                            }
                        } catch (error) {
                            console.error('Error fetching data:', error);
                        }
                        let payment = 'off';
                        let deposit = 'off';
                        let identity = 'off';
                        let email = 'off';

                        // Apply styles to the new div
                        newDiv.style.backgroundColor = 'rgb(251 251 251)'; // Light AliceBlue background
                        newDiv.style.border = '0px solid #ddd'; // Light border
                        newDiv.style.padding = '10px'; // Padding for spacing
                        newDiv.style.marginTop = '10px'; // Margin to separate from previous content
                        newDiv.style.borderRadius = '5px'; // Rounded corners
                        newDiv.style.color = '#333'; // Text color
                        const paymentImg = document.createElement('img');
                        paymentImg.src =
                            `https://cdn.bidman.co/app_assets/img/payment-${encodeURIComponent(payment)}.svg?v=1`;
                        paymentImg.alt = `Payment ${payment}`; // Alternative text for the paymentImg
                        paymentImg.style.maxWidth = '18px'; // Ensure paymentImg fits within the div
                        paymentImg.style.height = '18px'; // Maintain aspect ratio
                        paymentImg.style.marginLeft = '10px'; // Maintain aspect ratio
                        const popoverPayment = document.createElement('div');
                        popoverPayment.textContent = payment === 'off' ? 'Payment not verified' : 'Payment verified';
                        popoverPayment.style.position = 'absolute';
                        popoverPayment.style.visibility = 'hidden'; // Initially hidden
                        popoverPayment.style.backgroundColor = '#333';
                        popoverPayment.style.color = '#fff';
                        popoverPayment.style.textAlign = 'center';
                        popoverPayment.style.borderRadius = '5px';
                        popoverPayment.style.padding = '5px';
                        popoverPayment.style.fontSize = '12px';
                        popoverPayment.style.width = 'auto';
                        popoverPayment.style.zIndex = '1';
                        popoverPayment.style.opacity = '0';
                        popoverPayment.style.transition = 'opacity 0.3s';
                        popoverPayment.style.pointerEvents =
                            'none'; // Prevent popover from interfering with mouse events

                        // Show popover and position it relative to the mouse position on hover
                        paymentImg.addEventListener('mouseover', () => {
                            popoverPayment.style.visibility = 'visible';
                            popoverPayment.style.opacity = '1';
                        });

                        // Hide popover when the mouse leaves the image
                        paymentImg.addEventListener('mouseout', () => {
                            popoverPayment.style.visibility = 'hidden';
                            popoverPayment.style.opacity = '0';
                        });

                        // Update popover position based on the cursor position
                        paymentImg.addEventListener('mousemove', (e) => {
                            popoverPayment.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverPayment.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });

                        // Append image and popover to the div
                        newDiv.appendChild(paymentImg);
                        newDiv.appendChild(popoverPayment);
                        const image_deposit = document.createElement('img');
                        image_deposit.src =
                            `https://cdn.bidman.co/app_assets/img/deposit-${encodeURIComponent(payment)}.svg?v=1`;
                        image_deposit.alt = `deposit ${deposit}`; // Alternative text for the image_deposit
                        image_deposit.style.maxWidth = '18px'; // Ensure image_deposit fits within the div
                        image_deposit.style.height = '18px'; // Maintain aspect ratio
                        image_deposit.style.marginLeft = '10px';
                        const popoverDeposit = document.createElement('div');
                        popoverDeposit.textContent = deposit === 'off' ? 'Deposit not verified' : 'Deposit verified';
                        popoverDeposit.style.position = 'absolute';
                        popoverDeposit.style.visibility = 'hidden'; // Initially hidden
                        popoverDeposit.style.backgroundColor = '#333';
                        popoverDeposit.style.color = '#fff';
                        popoverDeposit.style.textAlign = 'center';
                        popoverDeposit.style.borderRadius = '5px';
                        popoverDeposit.style.padding = '5px';
                        popoverDeposit.style.fontSize = '12px';
                        popoverDeposit.style.width = 'auto';
                        popoverDeposit.style.zIndex = '1';
                        // popoverDeposit.style.bottom = '125%'; // Position above the image
                        // popoverDeposit.style.left = '50px';
                        // popoverDeposit.style.transform = 'translateX(-50%)';
                        popoverDeposit.style.opacity = '0';
                        popoverDeposit.style.transition = 'opacity 0.3s';
                        popoverDeposit.style.pointerEvents =
                            'none'; // Prevent popover from interfering with mouse events
                        // popoverDeposit.style.marginLeft = '375px';

                        // Show/hide popover on hover
                        image_deposit.addEventListener('mouseover', () => {
                            popoverDeposit.style.visibility = 'visible';
                            popoverDeposit.style.opacity = '1';
                        });
                        image_deposit.addEventListener('mouseout', () => {
                            popoverDeposit.style.visibility = 'hidden';
                            popoverDeposit.style.opacity = '0';
                        });
                        image_deposit.addEventListener('mousemove', (e) => {
                            popoverDeposit.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverDeposit.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        newDiv.appendChild(image_deposit);
                        newDiv.appendChild(popoverDeposit);
                        const image_identity = document.createElement('img');
                        image_identity.src =
                            `https://cdn.bidman.co/app_assets/img/identity-${encodeURIComponent(payment)}.svg?v=1`;
                        image_identity.alt = `identity ${identity}`; // Alternative text for the image_identity
                        image_identity.style.maxWidth = '18px'; // Ensure image_identity fits within the div
                        image_identity.style.height = '18px'; // Maintain aspect ratio
                        image_identity.style.marginLeft = '10px';
                        const popoverIdentity = document.createElement('div');
                        popoverIdentity.textContent = identity === 'off' ? 'Identity not verified' :
                            'Identity Verified';
                        popoverIdentity.style.position = 'absolute';
                        popoverIdentity.style.visibility = 'hidden'; // Initially hidden
                        popoverIdentity.style.backgroundColor = '#333';
                        popoverIdentity.style.color = '#fff';
                        popoverIdentity.style.textAlign = 'center';
                        popoverIdentity.style.borderRadius = '5px';
                        popoverIdentity.style.padding = '5px';
                        popoverIdentity.style.fontSize = '12px';
                        popoverIdentity.style.width = 'auto';
                        popoverIdentity.style.zIndex = '1';
                        // popoverIdentity.style.bottom = '125%'; // Position above the image
                        // popoverIdentity.style.left = '50px';
                        // popoverIdentity.style.transform = 'translateX(-50%)';
                        popoverIdentity.style.opacity = '0';
                        popoverIdentity.style.transition = 'opacity 0.3s';
                        popoverDeposit.style.pointerEvents =
                            'none'; // Prevent popover from interfering with mouse events
                        // popoverIdentity.style.marginLeft = '405px';

                        // Show/hide popover on hover
                        image_identity.addEventListener('mouseover', () => {
                            popoverIdentity.style.visibility = 'visible';
                            popoverIdentity.style.opacity = '1';
                        });
                        image_identity.addEventListener('mouseout', () => {
                            popoverIdentity.style.visibility = 'hidden';
                            popoverIdentity.style.opacity = '0';
                        });
                        image_identity.addEventListener('mousemove', (e) => {
                            popoverIdentity.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverIdentity.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });

                        newDiv.appendChild(image_identity);
                        newDiv.appendChild(popoverIdentity);
                        const image_email = document.createElement('img');
                        image_email.src =
                            `https://cdn.bidman.co/app_assets/img/email-${encodeURIComponent(email)}.svg?v=1`;
                        image_email.alt = `email ${email}`; // Alternative text for the image_email
                        image_email.style.maxWidth = '18px'; // Ensure image_email fits within the div
                        image_email.style.height = '18px'; // Maintain aspect ratio
                        image_email.style.marginLeft = '10px';
                        const popoverEmail = document.createElement('div');
                        popoverEmail.textContent = email === 'off' ? 'Email is not verified' : 'Email verified';
                        popoverEmail.style.position = 'absolute';
                        popoverEmail.style.visibility = 'hidden'; // Initially hidden
                        popoverEmail.style.backgroundColor = '#333';
                        popoverEmail.style.color = '#fff';
                        popoverEmail.style.textAlign = 'center';
                        popoverEmail.style.borderRadius = '5px';
                        popoverEmail.style.padding = '5px';
                        popoverEmail.style.fontSize = '12px';
                        popoverEmail.style.width = 'auto';
                        popoverEmail.style.zIndex = '1';
                        // popoverEmail.style.bottom = '125%'; // Position above the image
                        // popoverEmail.style.left = '105px';
                        // popoverEmail.style.transform = 'translateX(-50%)';
                        popoverEmail.style.opacity = '0';
                        popoverEmail.style.transition = 'opacity 0.3s';
                        popoverEmail.style.pointerEvents = 'none'; // Prevent popover from interfering with mouse events
                        // popoverEmail.style.marginLeft = '355px';

                        // Show/hide popover on hover
                        image_email.addEventListener('mouseover', () => {
                            popoverEmail.style.visibility = 'visible';
                            popoverEmail.style.opacity = '1';
                        });
                        image_email.addEventListener('mouseout', () => {
                            popoverEmail.style.visibility = 'hidden';
                            popoverEmail.style.opacity = '0';
                        });
                        image_email.addEventListener('mousemove', (e) => {
                            popoverEmail.style.left = `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverEmail.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        newDiv.appendChild(popoverEmail);
                        newDiv.appendChild(image_email);
                        const reviewDiv = document.createElement('div');
                        reviewDiv.classList.add('new-info');

                        // reviewDiv.style.position = 'relative'; // Ensure popover is positioned relative to this div
                        let isProject = 0;
                        let isReview = 0;
                        let is3Months = 0;
                        let is12Months = 0;

                        let totalProjects = 'off';
                        let review = 'off';
                        let threeMonths = 'off';
                        let twelveMonths = 'off';

                        try {
                            const reviewResponse = await fetch(
                                `${freelancerApiBaseUrl}/users/0.1/users/${encodeURIComponent(project.owner_id)}?reputation=true`, {
                                    method: 'GET',
                                    headers: {
                                        'Authorization': 'Bearer ' + freelancerAccessToken,
                                    }
                                });
                            if (!reviewResponse.ok) {
                                throw new Error(`HTTP error! status: ${reviewResponse.status}`);
                            }
                            const projectStats = await reviewResponse.json();

                            // Access the desired data
                            isProject = projectStats.result.reputation.entire_history.all;
                            isReview = projectStats.result.reputation.entire_history.reviews;
                            is3Months = projectStats.result.reputation.last3months.all;
                            is12Months = projectStats.result.reputation.last12months.all;

                            if (isProject) {
                                totalProjects = 'on';
                            }
                            if (isReview) {
                                review = 'on';
                            }
                            if (is3Months) {
                                threeMonths = 'on';
                            }
                            if (is12Months) {
                                twelveMonths = 'on';
                            }
                        } catch (error) {
                            console.error('Error fetching data:', error);
                        }

                        // Create first section (Reviews)
                        const image_review = document.createElement('img');
                        image_review.src =
                            `https://cdn.bidman.co/app_assets/img/client-stats-reviews-${encodeURIComponent(review)}.svg`;
                        image_review.alt = `review ${review}`;
                        image_review.style.maxWidth = '18px';
                        image_review.style.height = '18px';
                        image_review.style.marginLeft = '20px';
                        const textNode = document.createElement('span');
                        textNode.textContent = `${isReview} reviews`;
                        textNode.style.color = isReview ? '#17a673' : '#cd2d2d';
                        textNode.style.fontWeight = '600';
                        textNode.style.marginLeft = '10px';
                        textNode.style.display = 'inline-block';
                        // Create popover element for image_review
                        const popoverReview = document.createElement('div');
                        popoverReview.textContent = 'Reviews';
                        popoverReview.style.position = 'absolute';
                        popoverReview.style.visibility = 'hidden'; // Initially hidden
                        popoverReview.style.backgroundColor = '#333';
                        popoverReview.style.color = '#fff';
                        popoverReview.style.textAlign = 'center';
                        popoverReview.style.borderRadius = '5px';
                        popoverReview.style.padding = '5px';
                        popoverReview.style.fontSize = '12px';
                        popoverReview.style.width = 'auto';
                        popoverReview.style.zIndex = '1';
                        popoverReview.style.opacity = '0';
                        popoverReview.style.transition = 'opacity 0.3s';
                        popoverReview.style.pointerEvents =
                            'none'; // Prevent popover from interfering with mouse events

                        // Event listeners for hover
                        image_review.addEventListener('mouseover', () => {
                            popoverReview.style.visibility = 'visible';
                            popoverReview.style.opacity = '1';
                        });
                        image_review.addEventListener('mouseout', () => {
                            popoverReview.style.visibility = 'hidden';
                            popoverReview.style.opacity = '0';
                        });
                        image_review.addEventListener('mousemove', (e) => {
                            popoverReview.style.left = `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverReview.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        textNode.addEventListener('mouseover', () => {
                            popoverReview.style.visibility = 'visible';
                            popoverReview.style.opacity = '1';
                        });
                        textNode.addEventListener('mouseout', () => {
                            popoverReview.style.visibility = 'hidden';
                            popoverReview.style.opacity = '0';
                        });
                        textNode.addEventListener('mousemove', (e) => {
                            popoverReview.style.left = `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverReview.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });

                        // Append image, popover, and text to the div
                        reviewDiv.appendChild(image_review);
                        reviewDiv.appendChild(popoverReview);
                        reviewDiv.appendChild(textNode);

                        // Line break (optional, but avoid overusing <br>)
                        reviewDiv.appendChild(document.createElement('br'));

                        // Create second section (Projects)
                        const image_client = document.createElement('img');
                        image_client.src =
                            `https://cdn.bidman.co/app_assets/img/client-stats-all-${encodeURIComponent(totalProjects)}.svg`;
                        image_client.alt = `review ${totalProjects}`;
                        image_client.style.maxWidth = '18px';
                        image_client.style.height = '18px';
                        image_client.style.marginLeft = '20px';
                        const textClient = document.createElement('span');
                        textClient.textContent = `${isProject} Projects`;
                        textClient.style.color = isProject ? '#17a673' : '#cd2d2d';
                        textClient.style.fontWeight = '600';
                        textClient.style.marginLeft = '10px';
                        textClient.style.marginTop = '7px';
                        textClient.style.display = 'inline-block';

                        // Create popover element for image_review
                        const popoverProject = document.createElement('div');
                        popoverProject.textContent = 'Total projects';
                        popoverProject.style.position = 'absolute';
                        popoverProject.style.visibility = 'hidden'; // Initially hidden
                        popoverProject.style.backgroundColor = '#333';
                        popoverProject.style.color = '#fff';
                        popoverProject.style.textAlign = 'center';
                        popoverProject.style.borderRadius = '5px';
                        popoverProject.style.padding = '5px';
                        popoverProject.style.fontSize = '12px';
                        popoverProject.style.width = 'auto';
                        popoverProject.style.zIndex = '1';
                        popoverProject.style.opacity = '0';
                        popoverProject.style.transition = 'opacity 0.3s';
                        popoverProject.style.pointerEvents =
                            'none'; // Prevent popover from interfering with mouse events

                        // Show/hide popover on hover
                        image_client.addEventListener('mouseover', () => {
                            popoverProject.style.visibility = 'visible';
                            popoverProject.style.opacity = '1';
                        });
                        image_client.addEventListener('mouseout', () => {
                            popoverProject.style.visibility = 'hidden';
                            popoverProject.style.opacity = '0';
                        });
                        image_client.addEventListener('mousemove', (e) => {
                            popoverProject.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverProject.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        textClient.addEventListener('mouseover', () => {
                            popoverProject.style.visibility = 'visible';
                            popoverProject.style.opacity = '1';
                        });
                        textClient.addEventListener('mouseout', () => {
                            popoverProject.style.visibility = 'hidden';
                            popoverProject.style.opacity = '0';
                        });
                        textClient.addEventListener('mousemove', (e) => {
                            popoverProject.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverProject.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        reviewDiv.appendChild(image_client);
                        reviewDiv.appendChild(popoverProject);
                        reviewDiv.appendChild(textClient);

                        // Line break
                        reviewDiv.appendChild(document.createElement('br'));

                        // Create third section (Another Projects - 3 months)
                        const image_client3 = document.createElement('img');
                        image_client3.src =
                            `https://cdn.bidman.co/app_assets/img/client-stats-3m-${encodeURIComponent(threeMonths)}.svg`;
                        image_client3.alt = `review ${threeMonths}`;
                        image_client3.style.maxWidth = '18px';
                        image_client3.style.height = '18px';
                        image_client3.style.marginLeft = '20px';
                        const textClient3 = document.createElement('span');
                        textClient3.textContent = `${is3Months} Projects`;
                        textClient3.style.color = is3Months ? '#17a673' : '#cd2d2d';
                        textClient3.style.fontWeight = '600';
                        textClient3.style.marginLeft = '10px';
                        textClient3.style.marginTop = '7px';
                        textClient3.style.display = 'inline-block';
                        const popoverProject3 = document.createElement('div');
                        popoverProject3.textContent = 'Projects last three months';
                        popoverProject3.style.position = 'absolute';
                        popoverProject3.style.visibility = 'hidden'; // Initially hidden
                        popoverProject3.style.backgroundColor = '#333';
                        popoverProject3.style.color = '#fff';
                        popoverProject3.style.textAlign = 'center';
                        popoverProject3.style.borderRadius = '5px';
                        popoverProject3.style.padding = '5px';
                        popoverProject3.style.fontSize = '12px';
                        popoverProject3.style.width = 'auto';
                        popoverProject3.style.zIndex = '1';
                        popoverProject3.style.opacity = '0';
                        popoverProject3.style.transition = 'opacity 0.3s';
                        popoverProject3.style.pointerEvents = 'none';

                        // Show/hide popover on hover
                        image_client3.addEventListener('mouseover', () => {
                            popoverProject3.style.visibility = 'visible';
                            popoverProject3.style.opacity = '1';
                        });
                        image_client3.addEventListener('mouseout', () => {
                            popoverProject3.style.visibility = 'hidden';
                            popoverProject3.style.opacity = '0';
                        });
                        image_client3.addEventListener('mousemove', (e) => {
                            popoverProject3.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverProject3.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        textClient3.addEventListener('mouseover', () => {
                            popoverProject3.style.visibility = 'visible';
                            popoverProject3.style.opacity = '1';
                        });
                        textClient3.addEventListener('mouseout', () => {
                            popoverProject3.style.visibility = 'hidden';
                            popoverProject3.style.opacity = '0';
                        });
                        textClient3.addEventListener('mousemove', (e) => {
                            popoverProject3.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverProject3.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        reviewDiv.appendChild(image_client3);
                        reviewDiv.appendChild(popoverProject3);
                        reviewDiv.appendChild(textClient3);
                        reviewDiv.appendChild(document.createElement('br'));

                        // Create third section (Another Projects - 3 months)
                        const image_client4 = document.createElement('img');
                        image_client4.src =
                            `https://cdn.bidman.co/app_assets/img/client-stats-12m-${encodeURIComponent(twelveMonths)}.svg`;
                        image_client4.alt = `review ${twelveMonths}`;
                        image_client4.style.maxWidth = '18px';
                        image_client4.style.height = '18px';
                        image_client4.style.marginLeft = '20px';
                        const textClient4 = document.createElement('span');
                        textClient4.textContent = `${is12Months} Projects`;
                        textClient4.style.color = is12Months ? '#17a673' : '#cd2d2d';
                        textClient4.style.fontWeight = '600';
                        textClient4.style.marginLeft = '10px';
                        textClient4.style.marginTop = '7px';
                        textClient4.style.display = 'inline-block';
                        const popoverProject12 = document.createElement('div');
                        popoverProject12.textContent = 'Projects till last year';
                        popoverProject12.style.position = 'absolute';
                        popoverProject12.style.visibility = 'hidden'; // Initially hidden
                        popoverProject12.style.backgroundColor = '#333';
                        popoverProject12.style.color = '#fff';
                        popoverProject12.style.textAlign = 'center';
                        popoverProject12.style.borderRadius = '5px';
                        popoverProject12.style.padding = '5px';
                        popoverProject12.style.fontSize = '12px';
                        popoverProject12.style.width = 'auto';
                        popoverProject12.style.zIndex = '1';
                        popoverProject12.style.opacity = '0';
                        popoverProject12.style.transition = 'opacity 0.3s';
                        popoverProject12.style.pointerEvents = 'none';

                        // Show/hide popover on hover
                        image_client4.addEventListener('mouseover', () => {
                            popoverProject12.style.visibility = 'visible';
                            popoverProject12.style.opacity = '1';
                        });
                        image_client4.addEventListener('mouseout', () => {
                            popoverProject12.style.visibility = 'hidden';
                            popoverProject12.style.opacity = '0';
                        });
                        image_client4.addEventListener('mousemove', (e) => {
                            popoverProject12.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverProject12.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });
                        textClient4.addEventListener('mouseover', () => {
                            popoverProject12.style.visibility = 'visible';
                            popoverProject12.style.opacity = '1';
                        });
                        textClient4.addEventListener('mouseout', () => {
                            popoverProject12.style.visibility = 'hidden';
                            popoverProject12.style.opacity = '0';
                        });
                        textClient4.addEventListener('mousemove', (e) => {
                            popoverProject12.style.left =
                                `${e.pageX + 10}px`; // Offset to the right of the cursor
                            popoverProject12.style.top = `${e.pageY + 10}px`; // Offset below the cursor
                        });

                        reviewDiv.appendChild(image_client4);
                        reviewDiv.appendChild(popoverProject12);
                        reviewDiv.appendChild(textClient4);
                        // Find the skills section and insert the new div after it
                        const skillsSection = projectDiv.querySelector(
                            '.mt-2'); // Assuming .mt-2 is the class for the skills section
                        const bidButtonsSection = projectDiv.querySelector(
                            '.bid-buttons'); // Assuming .bid-buttons is the class for the bid buttons

                        // Budget
                        const budget = document.createElement('h5');
                        const strongBudget = document.createElement('strong');
                        const budgetMin = project.budget?.minimum || 'N/A';
                        const budgetMax = project.budget?.maximum || 'N/A';
                        strongBudget.textContent = `${currencySign}${budgetMin} - ${currencySign}${budgetMax}`;
                        budget.appendChild(strongBudget);

                        // Owner Info
                        const ownerInfo = document.createElement('div');
                        ownerInfo.classList.add('project-owner-info');
                        const ownerDetails = await fetchOwnerDetails(project.owner_id);

                        // Display country flag of user
                        const flagImg = document.createElement('img');
                        flagImg.classList.add('flag-icon');
                        const countryName = ownerDetails.location?.country?.name || '';
                        flagImg.src = getFlagUrl(countryName);
                        const userIcon = document.createElement('i');
                        userIcon.classList.add('bi', 'bi-person-fill');
                        userIcon.style.marginRight = '5px';
                        const ownerName = document.createElement('span');
                        ownerName.textContent = ownerDetails.display_name || "Unknown";

                        // Owner Rating
                        // const rating = document.createElement('span');
                        // rating.textContent = `Rating: ${ownerDetails.rating?.score || "N/A"}`;
                        // ownerInfo.appendChild(rating);

                        // Bid Buttons
                        const bidButtons = document.createElement('div');
                        bidButtons.classList.add('bid-buttons');
                        const inputFieldCard = document.createElement('div');
                        inputFieldCard.classList.add('input-field');
                        const labelSpan = document.createElement('span');
                        labelSpan.classList.add("price-text");
                        labelSpan.textContent = 'Your Bid: ';
                        labelSpan.style.fontWeight = 'bold';
                        inputFieldCard.appendChild(labelSpan);
                        const inputSpan = document.createElement('span');
                        const bidInput = document.createElement('input');
                        bidInput.type = 'number';
                        bidInput.name = 'bid_price';
                        bidInput.classList.add('price-input', 'bid_price');
                        const avgBid = Math.floor((budgetMin + budgetMax) / 2);
                        bidInput.value = avgBid;
                        bidInput.required = true;
                        inputSpan.appendChild(bidInput);
                        inputFieldCard.appendChild(inputSpan);
                        const currencyLabel = document.createElement('span');
                        currencyLabel.classList.add("price-text");
                        currencyLabel.textContent = ` ${project.currency?.code || ''}`;
                        currencyLabel.style.fontWeight = 'bold'; // Make the text bold
                        inputFieldCard.appendChild(currencyLabel);
                        col3Div.appendChild(inputFieldCard);
                        const placeBidBtn = document.createElement('button');
                        placeBidBtn.classList.add('btn', 'btn-success');
                        placeBidBtn.textContent = 'Place Bid';

                        // Add onclick event to place bid
                        placeBidBtn.onclick = async function() {
                            try {
                                const userResponse = await fetch(
                                    `${freelancerApiBaseUrl}/users/0.1/self/?jobs=true`, {
                                        method: 'GET',
                                        headers: {
                                            'Authorization': 'Bearer ' + freelancerAccessToken,
                                        }
                                    });

                                if (!userResponse.ok) {
                                    throw new Error('Failed to fetch user info: ' + userResponse.statusText);
                                }

                                const userData = await userResponse.json();
                                const bidderId = userData.result?.id;
                                if (!bidderId) {
                                    throw new Error('Bidder ID not found');
                                }

                                const bidAmount = parseFloat(bidInput.value);
                                const projectId = project.id;
                                const bidData = {
                                    "project_id": projectId,
                                    "amount": bidAmount,
                                    "period": 100,
                                    "bidder_id": bidderId,
                                    "milestone_percentage": 80,
                                    "description": "I have experience with similar projects and can deliver high-quality work within your timeframe. I have exp in node js too" // Customize description
                                };

                                const bidResponse = await fetch(
                                    `${freelancerApiBaseUrl}/projects/0.1/bids/?projects[]=${encodeURIComponent(projectId)}`, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'Authorization': 'Bearer ' + freelancerAccessToken,
                                        },
                                        body: JSON.stringify(bidData)
                                    });

                                if (!bidResponse.ok) {
                                    throw new Error('Failed to place bid' + bidResponse.statusText);
                                }
                                placeBidBtn.textContent = 'Bid Placed';
                                placeBidBtn.disabled = true;
                                const successMessage = document.createElement('p');
                                successMessage.textContent = 'Bid placed successfully!';
                                successMessage.style.color = 'green';
                                projectDiv.appendChild(successMessage);
                            } catch (error) {
                                console.error('Error placing bid:', error);
                                const errorMessage = document.createElement('p');
                                errorMessage.textContent = 'Failed to place bid: ' + error.message;
                                errorMessage.style.color = 'red';
                                projectDiv.appendChild(errorMessage);
                            }
                        };

                        const customizeBtn = document.createElement('button');
                        customizeBtn.classList.add('btn', 'btn-primary');
                        customizeBtn.textContent = 'Customize';
                        customizeBtn.setAttribute('data-bs-toggle', 'modal');
                        customizeBtn.setAttribute('data-bs-target', '#customizeModal');
                        bidButtons.appendChild(placeBidBtn);
                        bidButtons.appendChild(customizeBtn);
                        descriptionWrapper.appendChild(previewDescription);
                        descriptionWrapper.appendChild(fullDescription);
                        descriptionWrapper.appendChild(readMoreLink);
                        col6Div.appendChild(title);
                        col6Div.appendChild(descriptionWrapper);
                        col6Div.appendChild(smallInfo);
                        ownerInfo.appendChild(userIcon);
                        ownerInfo.appendChild(flagImg);
                        ownerInfo.appendChild(ownerName);
                        col6Div.appendChild(ownerInfo);
                        col6Div.appendChild(skillsDiv);
                        // Append the new div here
                        col2Div.appendChild(newDiv);
                        col2Div.appendChild(reviewDiv);
                        col3Div.appendChild(budget);
                        col3Div.appendChild(inputFieldCard);
                        col3Div.appendChild(bidButtons);
                        rowDiv.appendChild(col6Div);
                        rowDiv.appendChild(col2Div);
                        rowDiv.appendChild(col3Div);
                        projectDiv.appendChild(rowDiv);
                        projectsContainer.appendChild(projectDiv);
                    }
                } else {
                    projectsContainer.innerHTML = '<p>No active projects found.</p>';
                }
            } catch (error) {
                console.error('Error fetching data:', error);
                const projectsContainer = document.getElementById('projectsContainer');
                projectsContainer.innerHTML = `<p>Error fetching projects: ${error.message}</p>`;
            }
        }

        function getTimeSincePosted(submitDate) {
            const now = new Date();
            const postedTime = new Date(submitDate * 1000); // Assuming submitDate is in UNIX timestamp format
            const diffInSeconds = Math.floor((now - postedTime) / 1000);
            const minutes = Math.floor(diffInSeconds / 60);
            const hours = Math.floor(minutes / 60);
            const days = Math.floor(hours / 24);
            if (days > 0) {
                return days + ' day' + (days > 1 ? 's' : '');
            } else if (hours > 0) {
                return hours + ' hour' + (hours > 1 ? 's' : '');
            } else {
                return minutes + ' minute' + (minutes > 1 ? 's' : '');
            }
        }

        async function fetchOwnerDetails(ownerId) {
            try {
                const response = await fetch(`${freelancerApiBaseUrl}/users/0.1/users/${ownerId}`);
                if (!response.ok) {
                    throw new Error(`Error fetching owner details: ${response.statusText}`);
                }
                const data = await response.json();
                return data.result || {};
            } catch (error) {
                console.error("Error:", error);
                return {};
            }
        }

        let countryCodes = {};
        // Function to load the ISO3166 JSON file
        async function loadCountryCodes() {
            try {
                const response = await fetch('{{ asset('assets/ISO3166.json') }}');
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                countryCodes = await response.json();
            } catch (error) {
                console.error('Error loading country codes:', error);
            }
        }

        function getFlagUrl(countryName) {
            const baseUrl = 'https://www.f-cdn.com/assets/main/en/assets/flags';
            const countryCode = countryCodes[countryName];
            if (!countryCode) return '';
            const flagUrl = `${baseUrl}/${countryCode.toLowerCase()}.png`;
            return flagUrl;
        }

        function renderProjects() {
            fetchProjects();            
        }

        function checkForNewProjects(projects) {
            const newProjects = projects.filter(project => !currentProjectIds.includes(project.id));

            if (newProjects.length > 0) {
                currentProjectIds = [...currentProjectIds, ...newProjects.map(project => project.id)];
                //playSound();
                // showToast(`${newProjects.length} new project(s) found`);
            }
        }

        // function playSound() {
        //     const audio = new Audio('{asset('assets/audio/new_project_notification.wav')}}'); // Link to your notification sound
        //     audio.play();
        // }


        function showToast(message) {
            const toast = document.createElement('div');
            toast.classList.add('toast');
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        function startPolling() {
            fetchProjects();
            // setInterval(() => {
            //     fetchProjects(true); // Show notification if a new project is found
            // }, 4000);
        }

        // Refresh button click event
        document.getElementById('refreshBtn').addEventListener('click', () => fetchProjects(true));

        // Start polling on page load
        startPolling();
    </script>
@endsection
