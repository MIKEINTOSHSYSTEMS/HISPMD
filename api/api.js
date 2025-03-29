        // Menu Toggle for Mobile
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Tab Switching
        const tabs = document.querySelectorAll('.api-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs and contents
                document.querySelectorAll('.api-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.api-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Show corresponding content
                const tabId = this.getAttribute('data-tab');
                document.getElementById(`${tabId}-content`).classList.add('active');
            });
        });

        // Sidebar Navigation
        const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                sidebarLinks.forEach(l => l.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Hide all sections
                document.querySelectorAll('.main-content > div').forEach(section => {
                    section.style.display = 'none';
                });
                
                // Show selected section
                const sectionId = this.getAttribute('data-section') + 'Section';
                document.getElementById(sectionId).style.display = 'block';
            });
        });

        // API Key Management
        const apiKeyInput = document.getElementById('apiKeyInput');
        const saveApiKeyBtn = document.getElementById('saveApiKey');
        const apiKeyStatus = document.getElementById('apiKeyStatus');
        
        // Load saved API key from localStorage if available
        if (localStorage.getItem('apiKey')) {
            apiKeyInput.value = localStorage.getItem('apiKey');
            showApiKeyStatus('API key loaded from browser storage');
        }
        
        // Save API key to localStorage
        saveApiKeyBtn.addEventListener('click', function() {
            const apiKey = apiKeyInput.value.trim();
            if (apiKey) {
                localStorage.setItem('apiKey', apiKey);
                showApiKeyStatus('API key saved successfully');
            } else {
                showApiKeyStatus('Please enter a valid API key', false);
            }
        });
        
        function showApiKeyStatus(message, isSuccess = true) {
            apiKeyStatus.innerHTML = `<i class="fas fa-${isSuccess ? 'check' : 'exclamation'}-circle"></i> ${message}`;
            apiKeyStatus.style.color = isSuccess ? 'var(--success-color)' : 'var(--accent-color)';
            apiKeyStatus.style.display = 'block';
            setTimeout(() => {
                apiKeyStatus.style.display = 'none';
            }, 3000);
        }

        // Try It Out Button - Now makes actual API calls with API key support
        const tryButtons = document.querySelectorAll('.btn-try');
        tryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const endpoint = this.getAttribute('data-endpoint');
                const requiresKey = this.getAttribute('data-requires-key') === 'true';
                const tabName = this.closest('.api-content').id.replace('-content', '');
                const jsonViewer = document.getElementById(`json-${tabName}`);
                const statusElement = document.getElementById(`status-${tabName}`);
                
                // Check if API key is required but not provided
                if (requiresKey && !localStorage.getItem('apiKey')) {
                    statusElement.style.display = 'block';
                    statusElement.textContent = 'Error: API key is required for this endpoint. Please save your API key above.';
                    statusElement.className = 'response-status status-error';
                    jsonViewer.querySelector('pre').textContent = 'API key missing';
                    jsonViewer.style.display = 'block';
                    return;
                }
                
                // Show loading state
                const originalText = this.innerHTML;
                this.innerHTML = `<span class="spinner"></span> Loading...`;
                this.disabled = true;
                
                // Show JSON viewer
                jsonViewer.style.display = 'block';
                jsonViewer.querySelector('pre').textContent = 'Loading data...';
                statusElement.style.display = 'none';
                
                // Construct full API URL
                let apiUrl = '<?= $apiBaseUrl ?>' + endpoint;
                
                // Add API key to URL if required
                if (requiresKey) {
                    const apiKey = localStorage.getItem('apiKey');
                    if (apiUrl.includes('?')) {
                        apiUrl += `&apikey=${encodeURIComponent(apiKey)}`;
                    } else {
                        apiUrl += `?apikey=${encodeURIComponent(apiKey)}`;
                    }
                }
                
                // Make actual API call
                fetch(apiUrl)
                    .then(response => {
                        // Show response status
                        statusElement.style.display = 'block';
                        if (response.ok) {
                            statusElement.textContent = `Status: ${response.status} ${response.statusText}`;
                            statusElement.className = 'response-status status-success';
                            return response.json();
                        } else {
                            statusElement.textContent = `Status: ${response.status} ${response.statusText}`;
                            statusElement.className = 'response-status status-error';
                            return response.text().then(text => {
                                try {
                                    return JSON.parse(text);
                                } catch {
                                    return { error: text };
                                }
                            });
                        }
                    })
                    .then(data => {
                        // Format and syntax highlight the JSON
                        jsonViewer.querySelector('pre').innerHTML = syntaxHighlight(JSON.stringify(data, null, 2));
                    })
                    .catch(error => {
                        statusElement.style.display = 'block';
                        statusElement.textContent = `Error: ${error.message}`;
                        statusElement.className = 'response-status status-error';
                        jsonViewer.querySelector('pre').textContent = `Failed to fetch data: ${error.message}`;
                    })
                    .finally(() => {
                        // Reset button state
                        this.innerHTML = originalText;
                        this.disabled = false;
                    });
            });
        });

        // Refresh All Button
        document.getElementById('refreshAll').addEventListener('click', function() {
            const activeTab = document.querySelector('.api-tab.active');
            if (activeTab) {
                const tabId = activeTab.getAttribute('data-tab');
                const tryButton = document.querySelector(`#${tabId}-content .btn-try`);
                if (tryButton) {
                    tryButton.click();
                }
            }
        });

        // JSON Syntax Highlighting
        function syntaxHighlight(json) {
            json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
            return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
                let cls = 'json-value';
                if (/^"/.test(match)) {
                    if (/:$/.test(match)) {
                        cls = 'json-key';
                    } else {
                        cls = 'json-string';
                    }
                } else if (/true|false/.test(match)) {
                    cls = 'json-boolean';
                } else if (/null/.test(match)) {
                    cls = 'json-null';
                } else if (!isNaN(parseFloat(match))) {
                    cls = 'json-number';
                }
                return '<span class="' + cls + '">' + match + '</span>';
            });
        }

        // Search Functionality
        const searchBox = document.querySelector('.search-box input');
        searchBox.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const endpoints = document.querySelectorAll('.api-endpoint');
            
            endpoints.forEach(endpoint => {
                const endpointText = endpoint.textContent.toLowerCase();
                if (endpointText.includes(searchTerm)) {
                    endpoint.style.display = 'block';
                } else {
                    endpoint.style.display = 'none';
                }
            });
        });

        // Display current API base URL in console for debugging
        console.log('API Base URL:', '<?= $apiBaseUrl ?>');


// Documentation Button Click Handler
document.querySelectorAll('.btn-docs').forEach(button => {
    button.addEventListener('click', function() {
        const tabName = this.closest('.api-content').id.replace('-content', '');
        const modal = document.getElementById(`${tabName}-doc-modal`);
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });
});

// Close Modal Handlers
document.querySelectorAll('.close-modal').forEach(button => {
    button.addEventListener('click', function() {
        this.closest('.endpoint-doc-modal').style.display = 'none';
        document.body.style.overflow = 'auto';
    });
});

// Close modal when clicking outside content
document.querySelectorAll('.endpoint-doc-modal').forEach(modal => {
    modal.addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});

// Authentication Key Handling
const authApiKeyInput = document.getElementById('authApiKey');
const validateKeyBtn = document.getElementById('validateKey');
const copyAuthKeyBtn = document.getElementById('copyAuthKey');
const authKeyStatus = document.getElementById('authKeyStatus');
const authKeyPlaceholder = document.getElementById('authKeyPlaceholder');

// Load saved API key if available
if (localStorage.getItem('apiKey')) {
    authApiKeyInput.value = localStorage.getItem('apiKey');
    authKeyPlaceholder.textContent = localStorage.getItem('apiKey');
}

// Validate API Key
validateKeyBtn.addEventListener('click', function() {
    const apiKey = authApiKeyInput.value.trim();
    if (!apiKey) {
        showAuthKeyStatus('Please enter an API key to test', false);
        return;
    }
    
    // Show loading state
    const originalText = this.innerHTML;
    this.innerHTML = `<span class="spinner"></span> Validating...`;
    this.disabled = true;
    
    // Test the key with a simple endpoint
    fetch(`<?= $apiBaseUrl ?>app/api/v1.php?table=moh_indicators&action=list&apikey=${encodeURIComponent(apiKey)}`)
        .then(response => {
            if (response.ok) {
                showAuthKeyStatus('API key is valid!', true);
                authKeyPlaceholder.textContent = apiKey;
                // Also update the main API key input
                document.getElementById('apiKeyInput').value = apiKey;
            } else {
                showAuthKeyStatus('API key is invalid. Please check and try again.', false);
            }
        })
        .catch(error => {
            showAuthKeyStatus('Error testing API key: ' + error.message, false);
        })
        .finally(() => {
            this.innerHTML = originalText;
            this.disabled = false;
        });
});

// Copy Key Button
copyAuthKeyBtn.addEventListener('click', function() {
    const apiKey = authApiKeyInput.value.trim();
    if (!apiKey) {
        showAuthKeyStatus('No API key to copy', false);
        return;
    }
    
    navigator.clipboard.writeText(apiKey).then(() => {
        showAuthKeyStatus('API key copied to clipboard!', true);
    }).catch(err => {
        showAuthKeyStatus('Failed to copy key: ' + err, false);
    });
});

function showAuthKeyStatus(message, isSuccess) {
    authKeyStatus.innerHTML = `<i class="fas fa-${isSuccess ? 'check' : 'exclamation'}-circle"></i> ${message}`;
    authKeyStatus.style.color = isSuccess ? 'var(--success-color)' : 'var(--accent-color)';
    authKeyStatus.style.display = 'block';
    setTimeout(() => {
        authKeyStatus.style.display = 'none';
    }, 5000);
}

// Support Form Handling
document.getElementById('supportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = {
        name: document.getElementById('supportName').value,
        email: document.getElementById('supportEmail').value,
        organization: document.getElementById('supportOrganization').value,
        position: document.getElementById('supportPosition').value,
        subject: document.getElementById('supportSubject').value,
        message: document.getElementById('supportMessage').value,
        priority: document.getElementById('supportPriority').value
    };
    
    const statusElement = document.getElementById('supportFormStatus');
    
    // In a real implementation, you would send this to your server
    // For now, we'll just show a success message
    statusElement.innerHTML = `
        <div class="alert alert-info">
            <i class="fas fa-check-circle"></i> 
            Thank you, ${formData.name}! Your support ticket has been submitted successfully.
            Our team will contact you at ${formData.email} within 24-48 hours.
        </div>
    `;
    
    // Clear form
    this.reset();
    
    // Hide status after 5 seconds
    setTimeout(() => {
        statusElement.innerHTML = '';
    }, 10000);
});

// Copy to Clipboard Functionality
document.querySelectorAll('.copy-code').forEach(button => {
    button.addEventListener('click', function() {
        const target = document.querySelector(this.dataset.target);
        const code = target.querySelector('code').textContent;
        
        navigator.clipboard.writeText(code).then(() => {
            showCopyFeedback('Code copied to clipboard!', true);
        }).catch(err => {
            showCopyFeedback('Failed to copy code', false);
        });
    });
});

function showCopyFeedback(message, isSuccess) {
    const feedback = document.createElement('div');
    feedback.className = `copy-feedback ${isSuccess ? 'success' : 'error'}`;
    feedback.textContent = message;
    document.body.appendChild(feedback);
    
    setTimeout(() => {
        feedback.remove();
    }, 2000);
}

// Language Tabs Functionality
document.querySelectorAll('.language-tab').forEach(tab => {
    tab.addEventListener('click', function() {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.language-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.language-content').forEach(c => c.classList.remove('active'));
        
        // Add active class to clicked tab
        this.classList.add('active');
        
        // Show corresponding content
        const languageId = this.dataset.language;
        document.getElementById(`${languageId}-content`).classList.add('active');
    });
});

// Enhanced Form Submission
document.getElementById('supportForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = {
        name: this.supportName.value,
        email: this.supportEmail.value,
        organization: this.supportOrganization.value,
        position: this.supportPosition.value,
        phone: this.supportPhone.value,
        subject: this.supportSubject.value,
        message: this.supportMessage.value,
        priority: document.querySelector('input[name="priority"]:checked').value
    };

    const statusElement = document.getElementById('supportFormStatus');
    
    try {
        const response = await fetch('send_support_email.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        });

        const result = await response.json();
        
        if (response.ok) {
            statusElement.innerHTML = `
                <i class="fas fa-check-circle"></i>
                Ticket submitted successfully! We'll respond within 24 hours.
            `;
            statusElement.className = 'success';
            this.reset();
        } else {
            statusElement.innerHTML = `
                <i class="fas fa-times-circle"></i>
                ${result.error || 'Submission failed. Please try again.'}
            `;
            statusElement.className = 'error';
        }
        
        statusElement.style.display = 'block';
        setTimeout(() => {
            statusElement.style.display = 'none';
        }, 5000);

    } catch (error) {
        statusElement.innerHTML = `
            <i class="fas fa-times-circle"></i>
            Network error. Please check your connection.
        `;
        statusElement.className = 'error';
        statusElement.style.display = 'block';
    }
});

// Initialize Prism Syntax Highlighting
document.addEventListener('DOMContentLoaded', function() {
    Prism.highlightAll();
});

document.querySelectorAll('.faq-question').forEach(button => {
  button.addEventListener('click', () => {
    const faqItem = button.closest('.faq-item');
    faqItem.classList.toggle('active');
    
    // Optional: Close other open items
    document.querySelectorAll('.faq-item').forEach(item => {
      if (item !== faqItem) item.classList.remove('active');
    });
  });
});

// Dark Mode Toggle
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;

// Check for saved dark mode preference
if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add('dark-mode');
    darkModeToggle.checked = true;
}

// Toggle dark mode
darkModeToggle.addEventListener('change', function() {
    if (this.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('darkMode', 'enabled');
    } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('darkMode', 'disabled');
    }
});

// Update Prism theme when toggling dark mode
darkModeToggle.addEventListener('change', function() {
    const prismLink = document.querySelector('link[href*="prism-"]');
    if (prismLink) {
        if (this.checked) {
            prismLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css';
        } else {
            prismLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css';
        }
    }
});

// Menu Toggle Functionality
const menuToggle = document.getElementById('menuToggle');
const sidebar = document.getElementById('sidebar');
const menuToggleContainer = document.getElementById('menuToggleContainer');

menuToggle.addEventListener('click', function() {
    sidebar.classList.toggle('active');
    
    // Change icon based on state
    const icon = this.querySelector('i');
    if (sidebar.classList.contains('active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
    } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
    
    // Add smooth transition class
    sidebar.classList.add('transitioning');
    setTimeout(() => {
        sidebar.classList.remove('transitioning');
    }, 300);
});

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(e) {
    if (window.innerWidth <= 992 && 
        !sidebar.contains(e.target) && 
        !menuToggle.contains(e.target) && 
        !menuToggleContainer.contains(e.target) &&
        sidebar.classList.contains('active')) {
        sidebar.classList.remove('active');
        const icon = menuToggle.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
});

// Update sidebar position on resize
window.addEventListener('resize', function() {
    if (window.innerWidth > 992) {
        sidebar.classList.remove('active');
        const icon = menuToggle.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
});
// Function to close sidebar when clicking outside
function handleClickOutside(event) {
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.getElementById('menuToggle');
    
    // Check if click is outside the sidebar and not on the menu toggle button
    if (!sidebar.contains(event.target) && event.target !== menuToggle && !menuToggle.contains(event.target)) {
        sidebar.classList.remove('active');
    }
}

// Add event listener for clicks on the document
document.addEventListener('click', handleClickOutside);

// Also close sidebar when pressing Escape key
document.addEventListener('keydown', function(event) {
    const sidebar = document.getElementById('sidebar');
    if (event.key === 'Escape' && sidebar.classList.contains('active')) {
        sidebar.classList.remove('active');
    }
});

// Prevent clicks inside the sidebar from closing it
document.getElementById('sidebar').addEventListener('click', function(event) {
    event.stopPropagation();
});