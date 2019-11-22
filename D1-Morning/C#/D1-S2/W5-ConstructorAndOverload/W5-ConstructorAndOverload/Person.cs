namespace W5_ConstructorAndOverload
{
    class Person
    {
        public string firstName;
        public string middleName;
        public string lastName;

        public Person()
        {

        }

        public Person(string firstName, string lastName)
        {
            this.firstName = firstName;
            this.lastName = lastName;
        }

        public Person(string firstName, string middleName, string lastName)
            : this(firstName, lastName)
        {
            this.middleName = middleName;
        }

        public string GetMyFullName()
        {
            return firstName + " " + middleName + " " + lastName;
        }

        public string GetFullReverseName()
        {
            string fullName = GetMyFullName();
            string reverseName = "";
            for (int index = fullName.Length - 1; index >= 0; index--)
            {
                reverseName += fullName[index];
            }
            return reverseName;
        }
    }
}
