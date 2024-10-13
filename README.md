
# Habitify – Personal Habit Tracker with Social Features

Habitify is a full-stack web application that helps users track daily habits, set goals, and monitor progress. The app integrates social features, allowing users to connect with friends, share their milestones, and interact with each other's progress. The backend is powered by **Laravel**, and the frontend is built with **React** and **TypeScript**.

---

## Features

- **Habit Creation and Tracking**: Users can create habits, set specific goals, and track their progress.
- **Progress Visualization**: Users can visualize their progress through graphs, completion percentages, and trends.
- **User Authentication**: Secure user authentication using **Laravel Sanctum** with token-based API protection.
- **Social Integration**: Users can add friends, share habit progress, and engage through likes and comments on milestones.
- **Real-Time Notifications** (Planned): Push notifications for reminders and friend updates (using **WebSockets** or **Laravel Echo**).
- **Analytics**: Detailed habit analytics, including statistics on habit completion and performance trends over time.

---

## Tech Stack

- **Backend**: Laravel, MySQL
- **Frontend**: React, TypeScript
- **Authentication**: Laravel Sanctum (API token authentication)
- **Real-time Notifications**: WebSockets (using Laravel Echo, planned)
- **Deployment**: (Planned for Heroku, AWS, or similar platform)

---

## Project Structure

### 1. Backend (API)
   - Built with **Laravel**, providing RESTful API endpoints for habit tracking.
   - Includes CRUD operations for habits and progress tracking.
   - User authentication using **Laravel Sanctum**.
   - Social features like managing friends and interacting with habit progress.
   - Database migrations for handling habits, progress, and friendships.

### 2. Frontend (React+TypeScript)
   - Built with **React** and **TypeScript** to provide an interactive UI.
   - **Habit Dashboard**: Manage and view progress of personal habits.
   - **Friendship Management**: Add friends, accept requests, and view friends' progress.
   - **Notifications**: Receive real-time updates for habit reminders and friends' activities (planned).

---

## Setup Instructions

### Backend (Laravel)

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/habit-tracker.git
   cd habit-tracker
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Set up the `.env` file:
   ```bash
   cp .env.example .env
   ```
   Update the database credentials and other necessary settings.

4. Run the database migrations:
   ```bash
   php artisan migrate
   ```

5. Start the Laravel development server:
   ```bash
   php artisan serve
   ```

### Frontend (React+TypeScript)

1. Navigate to the frontend folder (once set up):
   ```bash
   cd frontend
   ```

2. Install npm dependencies:
   ```bash
   npm install
   ```

3. Start the React development server:
   ```bash
   npm start
   ```

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Contributing

Contributions are welcome! Feel free to fork the repository and submit a pull request, or open an issue for discussion.

