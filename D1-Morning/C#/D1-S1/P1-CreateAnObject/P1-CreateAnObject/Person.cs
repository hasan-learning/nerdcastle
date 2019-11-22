namespace P1_CreateAnObject
{
    class Person
    {
        public string firstName;
        public string middleName;
        public string lastName;

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
