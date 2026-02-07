# Teacher Faculty Management System (TFMS)

## Overview

The Teacher Faculty Management System (TFMS) is a comprehensive web-based application designed to help educational institutions efficiently manage teacher profiles, subjects, classrooms, schedules, and teaching assignments. The system provides separate interfaces for administrators and teachers with a user-friendly dashboard and complete CRUD functionality.

## Features

### Admin Features
- **Dashboard**: Overview of all system statistics (teachers, subjects, classrooms, schedules)
- **Teacher Management**: Add, edit, delete, and search teacher records
- **Subject Management**: Manage courses and subjects offered by the institution
- **Classroom Management**: Manage classroom information, capacity, and equipment
- **Schedule Management**: Create and manage teaching timetables with automatic conflict detection
- **Time Slot Configuration**: Define class time slots (e.g., 8:00 AM - 8:50 AM)
- **Teacher Assignments**: Assign subjects to teachers for specific academic years
- **Search & Filter**: Search teachers by name, department, or subject

### Teacher Features
- **Dashboard**: View personal teaching statistics and upcoming classes
- **My Schedule**: View complete weekly teaching schedule
- **Current Assignment**: Real-time information about current class assignment
- **Assignment Details**: See all assigned subjects, rooms, and schedules
- **Auto-refresh**: Current assignment refreshes every 30 seconds

### System Features
- **User Authentication**: Secure login system for admin and teachers
- **Schedule Conflict Detection**: Prevents teacher or room overlap
- **Responsive Design**: Works on desktop, tablet, and mobile devices
- **Data Validation**: Input validation on all forms
- **Session Management**: Secure session handling
- **Academic Year Support**: Support for multiple academic years

## Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Server**: Apache with PHP support

## Installation

### Prerequisites
- XAMPP (or similar Apache/MySQL/PHP stack) installed
- PHP 7.4 or higher
- MySQL Server
- Web browser (Chrome, Firefox, Safari, Edge)

### Setup Steps

1. **Extract the project** to your XAMPP `htdocs` directory:
   ```
   C:\xampp\htdocs\Teacher Faculty Management website\
   ```

2. **Create the database**:
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Import the `database.sql` file to create all tables and sample data

3. **Configure Database Connection**:
   - Edit `config/Database.php` if needed
   - Default: localhost, root user, no password

4. **Start XAMPP**:
   - Start Apache and MySQL services
   - Open browser and navigate to: `http://localhost/Teacher%20Faculty%20Management%20website/login.php`

5. **Login with default credentials**:
   - **Username**: admin
   - **Password**: admin123

## Project Structure

```
Teacher Faculty Management website/
├── admin/                          # Admin panel pages
│   ├── dashboard.php              # Admin dashboard
│   ├── teachers.php               # Teacher management
│   ├── subjects.php               # Subject management
│   ├── classrooms.php             # Classroom management
│   ├── schedules.php              # Schedule management
│   ├── assignments.php            # Teacher assignments
│   ├── time-slots.php             # Time slot configuration
│   ├── header.php                 # Navigation header
│   ├── footer.php                 # Footer
│   └── logout.php                 # Logout handler
├── teacher/                        # Teacher portal pages
│   ├── dashboard.php              # Teacher dashboard
│   ├── schedule.php               # Personal schedule view
│   ├── current.php                # Current assignment
│   └── logout.php                 # Logout handler
├── assets/
│   ├── css/
│   │   └── style.css              # Main stylesheet
│   ├── js/
│   │   └── script.js              # JavaScript functionality
│   └── images/                    # Image assets
├── classes/                        # PHP classes
│   ├── User.php                   # User management
│   ├── Teacher.php                # Teacher operations
│   ├── Subject.php                # Subject operations
│   ├── Classroom.php              # Classroom operations
│   └── Schedule.php               # Schedule operations
├── config/
│   ├── Database.php               # Database connection
│   └── SessionManager.php         # Session handling
├── views/                         # Template views (future)
├── login.php                      # Login page
├── database.sql                   # Database schema
└── README.md                      # This file
```

## Database Schema

### Main Tables

- **users**: User accounts (admin, teacher, student)
- **teachers**: Teacher profile information
- **subjects**: Course/subject information
- **classrooms**: Room and classroom information
- **time_slots**: Predefined class time slots
- **schedules**: Teacher-classroom-subject-time assignments
- **teacher_subjects**: Subject assignments for teachers
- **classes**: Class/section information
- **class_assignments**: Class-subject-teacher assignments
- **audit_logs**: Activity logging

## User Roles

### Admin
- Full access to all system features
- Can manage all data (teachers, subjects, classrooms, schedules)
- Can view all reports and statistics
- Access to admin dashboard

### Teacher
- View personal teaching schedule
- View assigned subjects and classrooms
- View current class assignment
- Cannot edit or delete any data

### Student (Optional)
- View public teacher schedules
- View room assignments
- View general information

## Usage Guide

### For Administrators

#### Adding a Teacher
1. Go to Teachers Management
2. Click "Add New Teacher"
3. Fill in personal details (name, email, phone, etc.)
4. Create login credentials
5. Click "Add Teacher"

#### Creating a Schedule
1. Go to Schedules Management
2. Click "Create Schedule"
3. Select teacher, subject, classroom, day, and time slot
4. System automatically checks for conflicts
5. Click "Create Schedule"

#### Managing Subjects
1. Go to Subjects Management
2. Add new subjects with code, name, and credits
3. Organize by department
4. Edit or delete as needed

#### Assigning Teachers to Subjects
1. Go to Teacher Assignments
2. Click "Create Assignment"
3. Select teacher and subject
4. Set academic year and semester
5. Click "Create Assignment"

### For Teachers

#### Viewing Schedule
1. Login with teacher credentials
2. Click "My Schedule"
3. View all scheduled classes for the week
4. See subject, room, and time details

#### Checking Current Assignment
1. Go to "Current Assignment" page
2. System displays current class if in progress
3. Auto-refreshes every 30 seconds
4. Shows next upcoming class if not currently in session

#### Dashboard Overview
1. View teaching statistics
2. See today's classes
3. Quick access to schedules
4. View assigned subjects

## Key Features Explained

### Schedule Conflict Detection
The system prevents conflicts by checking:
- Same teacher cannot be assigned to two classes at the same time
- Same classroom cannot be assigned to multiple teachers at the same time
- Automatic validation on schedule creation and update

### Search & Filter
- Search teachers by name, email, or department
- Filter by status (active, inactive, on leave)
- Search classrooms by room number, building, or type
- Filter by room type (classroom, lab, seminar, auditorium)

### Academic Year Management
- Support for multiple academic years
- Organize schedules by academic year and semester
- Different assignments for different years

### Responsive Design
- Bootstrap 5 for responsive layout
- Mobile-friendly interface
- Works on all screen sizes
- Touch-friendly navigation

## Default Data

### Sample Time Slots
- Slot 1: 08:00 - 08:50
- Slot 2: 09:00 - 09:50
- Slot 3: 10:00 - 10:50
- Slot 4: 11:00 - 11:50
- Slot 5: 12:00 - 12:50
- Slot 6: 13:30 - 14:20
- Slot 7: 14:30 - 15:20
- Slot 8: 15:30 - 16:20

### Sample Data
- 5 classrooms (A101, A102, B101, B201, C101)
- 5 subjects (CS101, CS201, MATH101, PHYS101, ENG101)
- 3 classes (CS-A, CS-B, MATH-A)

## Security Features

- Password hashing using PHP's password_hash() function
- SQL prepared statements to prevent SQL injection
- Session-based authentication
- Input validation and sanitization
- CSRF protection ready (implement with tokens)
- Role-based access control

## API Endpoints (For Future Development)

```
GET    /api/teachers              - List all teachers
GET    /api/teachers/{id}         - Get teacher details
POST   /api/teachers              - Create teacher
PUT    /api/teachers/{id}         - Update teacher
DELETE /api/teachers/{id}         - Delete teacher

GET    /api/schedules             - List all schedules
GET    /api/schedules/{id}        - Get schedule details
POST   /api/schedules             - Create schedule
PUT    /api/schedules/{id}        - Update schedule
DELETE /api/schedules/{id}        - Delete schedule
```

## Troubleshooting

### Database Connection Issues
- Check XAMPP MySQL is running
- Verify credentials in `config/Database.php`
- Check phpMyAdmin can connect

### Login Issues
- Ensure database is imported
- Check user credentials match database
- Clear browser cache
- Check browser cookies enabled

### Schedule Conflicts
- Verify time slots are configured
- Check classroom and teacher availability
- Review existing schedules for conflicts

### File Not Found Errors
- Ensure project is in `htdocs` directory
- Check file paths are correct
- Verify file names match URLs

## Performance Optimization

- Database indexes on frequently searched fields
- Prepared statements for query efficiency
- Caching of time slots and classrooms
- Pagination for large datasets (future enhancement)

## Future Enhancements

- [ ] RESTful API for mobile apps
- [ ] Student enrollment management
- [ ] Attendance tracking
- [ ] Grade management
- [ ] Email notifications
- [ ] Calendar view for schedules
- [ ] PDF report generation
- [ ] Advanced filtering and sorting
- [ ] Dashboard widgets customization
- [ ] Bulk import/export functionality

## Support & Maintenance

### Regular Tasks
- Backup database regularly
- Monitor user activities in audit logs
- Review system logs
- Update PHP and MySQL regularly
- Test backup/restore procedures

### Admin Functions
- User account management
- Data validation and cleanup
- Schedule optimization
- Report generation

## License

This system is provided as-is for educational institutions. Modify and distribute as needed.

## Contact & Support

For issues or feature requests, contact your system administrator.

---

**Version**: 1.0.0  
**Last Updated**: January 2026  
**Created for**: Educational Institutions
