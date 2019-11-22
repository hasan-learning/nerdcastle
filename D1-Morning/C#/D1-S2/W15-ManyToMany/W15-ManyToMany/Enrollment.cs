using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W15_ManyToMany
{
    public class Enrollment
    {
        public Student Student { set; get; }
        public Course Course { set; get; }
        public DateTime EnrollmentDate { set; get; }

        public Enrollment(Student student, Course course, DateTime enrollmentDate)
        {
            Student = student;
            Course = course;
            EnrollmentDate = enrollmentDate;
        }
    }
}
