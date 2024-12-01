'use client'

import { useState } from 'react'
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { ArrowRight } from 'lucide-react'

export function AboutSection() {
  const [email, setEmail] = useState('')

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault()
    // Handle newsletter signup
    console.log('Newsletter signup:', email)
    setEmail('')
  }

  return (
    <section className="relative min-h-screen py-32">
      {/* Background gradient */}
      <div className="absolute inset-0 bg-gradient-to-b from-blue-900/10 via-purple-900/5 to-black/10 pointer-events-none" />
      
      <div className="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          <div className="space-y-8 max-w-2xl">
            <h2 className="text-6xl font-bold">
              <span className="text-white">About</span>{' '}
              <span className="bg-gradient-to-r from-purple-400 to-pink-300 bg-clip-text text-transparent">
                Artist
              </span>
            </h2>
            <p className="text-gray-300 text-lg leading-relaxed">
              Don't miss out on the latest music news, exclusive offers and
              promotions. Stay in the loop with the freshest tracks and be the first to know
              about upcoming releases in the spotlight, plus more. Sign up now
              and never miss a beat!
            </p>
            
            <form onSubmit={handleSubmit} className="space-y-4">
              <div className="relative max-w-md">
                <Input
                  type="email"
                  placeholder="Enter your email"
                  className="w-full bg-white/5 border-white/10 text-white placeholder:text-gray-400 h-14 pr-12 focus:ring-2 focus:ring-purple-500"
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                  required
                />
                <Button 
                  type="submit"
                  size="icon"
                  className="absolute right-2 top-2 h-10 w-10 bg-purple-500 hover:bg-purple-600"
                >
                  <ArrowRight className="h-5 w-5" />
                </Button>
              </div>
            </form>
          </div>
          
          <div className="relative aspect-square lg:aspect-[4/3] rounded-3xl overflow-hidden">
            <img
              src="/111.jpg"
              alt="About Artist"
              className="w-full h-full object-cover"
            />
            <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent" />
          </div>
        </div>
      </div>
    </section>
  )
}
