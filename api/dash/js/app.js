// app.js
class DashboardApp {
    constructor() {
        this.initTheme();
        this.initSidebar();
        this.initResponsiveGrid();
        this.initEventListeners();
        this.initChartResizeObserver();
        this.loadInitialData();
    }

    // Theme Management
    initTheme() {
        this.currentTheme = localStorage.getItem('dashboardTheme') || 'light';
        document.documentElement.setAttribute('data-bs-theme', this.currentTheme);
        this.applyChartTheme();
    }

    toggleTheme() {
        this.currentTheme = this.currentTheme === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-bs-theme', this.currentTheme);
        localStorage.setItem('dashboardTheme', this.currentTheme);
        this.applyChartTheme();
        this.updateFormElementsTheme();
    }

    applyChartTheme() {
        const themeOptions = this.currentTheme === 'dark' ? {
            chart: { backgroundColor: '#1a1a1a' },
            title: { style: { color: '#e9ecef' } },
            legend: { itemStyle: { color: '#adb5bd' } },
            xAxis: { labels: { style: { color: '#adb5bd' } } },
            yAxis: { labels: { style: { color: '#adb5bd' } } }
        } : {
            chart: { backgroundColor: '#ffffff' },
            title: { style: { color: '#212529' } },
            legend: { itemStyle: { color: '#495057' } }
        };

        Highcharts.setOptions(themeOptions);
        Highcharts.charts.forEach(chart => chart.update(themeOptions));
    }

    updateFormElementsTheme() {
        document.querySelectorAll('input, select, textarea').forEach(el => {
            el.style.backgroundColor = this.currentTheme === 'dark' ? '#2d2d2d' : '#ffffff';
            el.style.color = this.currentTheme === 'dark' ? '#e9ecef' : '#212529';
        });
    }

    // Sidebar Management
    initSidebar() {
        this.sidebar = document.querySelector('.sidebar');
        this.sidebarState = localStorage.getItem('sidebarState') || 'open';
        this.sidebar.classList.toggle('collapsed', this.sidebarState === 'closed');
    }

    toggleSidebar() {
        this.sidebar.classList.toggle('collapsed');
        this.sidebarState = this.sidebar.classList.contains('collapsed') ? 'closed' : 'open';
        localStorage.setItem('sidebarState', this.sidebarState);
    }

    // Responsive Grid
    initResponsiveGrid() {
        this.grid = new Muuri('.dashboard-container', {
            dragEnabled: true,
            layout: {
                fillGaps: true,
                horizontal: false,
                alignRight: false,
                alignBottom: false
            },
            dragStartPredicate: {
                distance: 10
            }
        });

        this.grid.on('layoutEnd', () => {
            this.grid.refreshItems().layout();
        });

        window.addEventListener('resize', () => this.grid.refresh());
    }

    // Chart Management
    createChartElement(id, title) {
        const div = document.createElement('div');
        div.className = 'chart-card';
        div.innerHTML = `
        <div class="chart-loader"></div>
        <div class="position-relative h-100">
          <div class="chart-controls">
            <button class="btn btn-sm btn-outline-secondary" onclick="dashboardApp.editChart('${id}')">
              <i class="fas fa-edit"></i>
            </button>
            <button class="btn btn-sm btn-outline-danger" onclick="dashboardApp.deleteChart('${id}')">
              <i class="fas fa-trash"></i>
            </button>
          </div>
          <div id="${id}" class="chart-container"></div>
        </div>
      `;
        return div;
    }

    addNewChart(config) {
        const chartElement = this.createChartElement(config.id, config.title);
        this.grid.add(chartElement);
        this.renderChart(config);
    }

    renderChart(config) {
        // Your chart rendering logic here
    }

    // Event Listeners
    initEventListeners() {
        window.addEventListener('resize', this.debounce(() => {
            this.grid.refresh();
        }, 200));

        document.querySelectorAll('.filter-select').forEach(select => {
            select.addEventListener('click', this.handleFilterToggle);
        });

        // Mobile menu toggle
        document.querySelector('.mobile-menu-toggle').addEventListener('click', () => {
            this.toggleSidebar();
        });
    }

    // Utility Methods
    debounce(func, delay) {
        let timeout;
        return (...args) => {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), delay);
        };
    }

    showLoading() {
        const overlay = document.createElement('div');
        overlay.className = 'loading-overlay';
        overlay.innerHTML = `
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      `;
        document.body.appendChild(overlay);
    }

    hideLoading() {
        document.querySelector('.loading-overlay')?.remove();
    }

    // Initialize App
    loadInitialData() {
        this.showLoading();
        // Load initial data here
        setTimeout(() => this.hideLoading(), 1000);
    }

    // Chart Resize Observer
    initChartResizeObserver() {
        this.resizeObserver = new ResizeObserver(entries => {
            entries.forEach(entry => {
                const chartId = entry.target.querySelector('.chart-container').id;
                const chart = Highcharts.charts.find(c => c.renderTo.id === chartId);
                chart?.reflow();
            });
        });

        document.querySelectorAll('.chart-card').forEach(card => {
            this.resizeObserver.observe(card);
        });
    }
}

// Theme Management
function toggleTheme() {
    const theme = document.documentElement.getAttribute('data-bs-theme');
    const newTheme = theme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-bs-theme', newTheme);
    localStorage.setItem('dashboardTheme', newTheme);
    updateChartThemes(newTheme);
}

function updateChartThemes(theme) {
    Highcharts.theme = theme === 'dark' ? {
        colors: ['#6c8cd5', '#7EC850', '#FF7A4D', '#FFFF66'],
        chart: {
            backgroundColor: '#2d2d2d'
        },
        title: {
            style: {
                color: '#fff'
            }
        },
        legend: {
            itemStyle: {
                color: '#ccc'
            }
        }
    } : {
        colors: ['#4A90E2', '#50B432', '#ED561B', '#DDDF00'],
        chart: {
            backgroundColor: '#fff'
        },
        title: {
            style: {
                color: '#333'
            }
        }
    };
    Highcharts.setOptions(Highcharts.theme);
    Highcharts.charts.forEach(chart => chart.update({}));
}

// Sidebar Management
function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('active');
}

// Responsive Layout
function initResponsiveGrid() {
    const grid = new Muuri('.dashboard-container', {
        dragEnabled: true,
        layout: {
            fillGaps: true,
            horizontal: false,
            alignRight: false,
            alignBottom: false
        }
    });
    window.addEventListener('resize', () => grid.refresh());
}

// Chart Creation
function createChartElement(id, title) {
    const div = document.createElement('div');
    div.className = 'chart-card p-3';
    div.innerHTML = `
                <div class="position-relative h-100">
                    <div class="chart-controls">
                        <button class="btn btn-sm btn-outline-secondary" onclick="editChart('${id}')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" onclick="deleteChart('${id}')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                    <div id="${id}" class="chart-container" style="height: 100%;"></div>
                </div>
            `;
    return div;
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('dashboardTheme') || 'light';
    document.documentElement.setAttribute('data-bs-theme', savedTheme);
    updateChartThemes(savedTheme);
    initResponsiveGrid();
});

// Initialize Application
const dashboardApp = new DashboardApp();

// Global access for HTML event handlers
window.toggleTheme = () => dashboardApp.toggleTheme();
window.toggleSidebar = () => dashboardApp.toggleSidebar();